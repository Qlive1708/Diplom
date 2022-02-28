<x-home-master>

@section('content')

        <h1 class="my-4">Create <small>Post</small>
        </h1>

        <form method="post" action="{{route('user.store_post')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title">Название</label>
                <input type="text"
                       name="title"
                       class="form-control"
                       id="title"
                       aria-describedby=""
                       placeholder="" value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <span class="help-block text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
                <label for="title">Категория</label>
                <select name="category_id" class="form-control" id="category_id">
                    <option value="">Выберите категорию</option>
                    @foreach($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>

                @if ($errors->has('category_id'))
                    <span class="help-block text-danger">
                                    <strong>{{ $errors->first('category_id') }}</strong>
                                </span>
                @endif

            </div>

            <div class="form-group {{ $errors->has('post_image') ? ' has-error' : '' }}">
                <label for="file">Изображение</label>
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
                <label for="title">Описание</label>
                         <textarea
                                 name="body"
                                 class="form-control"
                                 id="body"
                                 cols="30"
                                 rows="6">{{ old('body') }}</textarea>

                @if ($errors->has('body'))
                    <span class="help-block text-danger">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                @endif

            </div>

            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>

        <br>

        @endsection
        @push('style')
        <link rel="stylesheet" href="{{asset('plagins/summernote/summernote-bs4.min.css')}}">
        @endpush
        @push('scripts')
        <script src="{{ asset('plagins/summernote/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('plagins/summernote/lang/summernote-ru-RU.min.js') }}"></script>
        <script>
            $(function(){
                $("#body").summernote();
            });
        </script>
    @endpush
</x-home-master>
