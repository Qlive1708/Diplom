<x-home-master>

@section('content')

        <h2 class="my-4 font2">Создать <small>статью</small>
        </h2>

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

            <button type="submit" class="btn btn-fiol">Отправить</button>
        </form>

        <br>

        @endsection
        @section('footer')
    <footer class="footer-07">
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12 text-center">

            <h4 class="footer-heading">WEB<span href="#" class="logo">INFO</span></h4>
        <p class="menu">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Blog</a>
        </p>
        <ul class="ftco-footer-social p-0">
        {{-- <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><span class="ion-logo-twitter"></span></a></li>
        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><span class="ion-logo-facebook"></span></a></li>
        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><span class="ion-logo-instagram"></span></a></li> --}}
        </ul>
        </div>
        </div>
        <div class="row mt-5">
        <div class="col-md-12 text-center">
        <p class="copyright">
        Copyright ©<script wfd-invisible="true">document.write(new Date().getFullYear());</script>2022 All rights reserved | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by <a href="" target="_blank">Wermy-web.com</a>
        </p>
        </div>
        </div>
        </div>
        </footer>
    </div>

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
