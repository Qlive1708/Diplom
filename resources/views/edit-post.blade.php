<x-home-master>

@section('content')

        <h1 class="my-4 font2">Редактировать <small>статью</small>
        </h1>

        <form method="post" action="{{route('user.update_post', $posts->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title">Title</label>
                <input type="text"
                       name="title"
                       class="form-control"
                       id="title"
                       aria-describedby=""
                       placeholder="Enter title" value="{{ $posts['title'] }}">
                @if ($errors->has('title'))
                    <span class="help-block text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
                <label for="title">Category</label>
                <select name="category_id" class="form-control" id="category_id">
                    <option value="">Select Category</option>
                    @foreach($category as $cat)
                        <option value="{{ $cat->id }}" @if($cat->id == $posts->category_id) selected @endif>{{ $cat->name }}</option>
                    @endforeach
                </select>

                @if ($errors->has('category_id'))
                    <span class="help-block text-danger">
                                    <strong>{{ $errors->first('category_id') }}</strong>
                                </span>
                @endif

            </div>

            <div class="form-group {{ $errors->has('post_image') ? ' has-error' : '' }}">
                <div><img height="100px" src="{{$posts->post_image}}" alt=""></div>
                <label for="file">File</label>
                <input type="file"
                       name="post_image"
                       class="form-control-file"
                       id="post_image">
                @if ($errors->has('post_image'))
                    <span class="help-block text-danger">
                                    <strong>{{ $errors->first('post_image') }}</strong>
                                </span>
                @endif
            </div>


            <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
                         <textarea
                                 name="body"
                                 class="form-control"
                                 id="body"
                                 cols="30"
                                 rows="6">{{$posts->body}}</textarea>

                @if ($errors->has('body'))
                    <span class="help-block text-danger">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                @endif

            </div>
btn btn-fiol
            <button type="submit" class="btn btn-fiol">Сохранить</button>
        </form>

        <br>

        @endsection


</x-home-master>
