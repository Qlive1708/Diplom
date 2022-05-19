<x-my-home-master>

    @section('content')
    @section('content')
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-6">
                <div class="card-2 mb-3" style="">
                    <!-- Изображение -->
                    <img class="card-img-top" src="{{ asset($post->post_image) }}" alt="...">
                    <!-- Текстовый контент -->
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text">Каждый веб-разработчик знает, что такое текст-«рыба». Текст этот,
                            несмотря на
                            название, не имеет никакого отношения к обитателям водоемов.</p>
                        <a href="{{ route('post', $post->id) }}" class="btn btn-fiol">Перейти</a>
                    </div>
                </div><!-- Конец карточки -->
            </div>
        @endforeach
    </div>

                <div style="">
                    @include('pagination.limit_links', ['paginator' => $posts])</div>


        @endsection

        @section('sidebar')
        <div class="container mt-4">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="card-2 p-4 mt-6">

                        <div class="d-flex justify-content-center px-4">
                            <div class="search">

                                <form class="form-db" method="get" action="/Article/search">
                                    <input type="text" class="search-input"
                                    placeholder="Поиск..." name="keyword" id="keyword" value = "@if (isset($_REQUEST['keyword'])){{ $_REQUEST['keyword'] }}@endif">
                                    <button class="search-icon"  type="submit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                      </svg></button>
                                    </form>
                            </div>
                        </div>
                        <div class="row mt-4 g-1 px-4 mb-1 mt-3">
                            @foreach ($categories as $category)
                            <div class="col-md-2">

                                <div class=" border card-inner p-3 d-flex flex-column align-items-center"> <img  src="/storage/public/logo/laravel-2.svg" alt="" width="40">
                                    <div class="text-center mg-text"> <span class="mg-text"> <a href="{{ url('/Article/search') . '/' . $category->id }}"
                                        @if ($selected_category == $category->id) style="" @endif>{{ $category->name }}</a></span> </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>




    {{--
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                    </div>
                </div> --}}

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

    </x-home-master>
