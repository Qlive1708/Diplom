<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog-Portfolio</title>

    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">

    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
    @stack('style')

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top ">
    <div class="container ">
       
        <a class="navbar-brand text-dark" href="{{route('home')}}">WEB<span class="logo">INFO</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ (Route::currentRouteName() == 'home') ? ' active' : ''}}">

                </li>

                <li class="nav-item {{ (Route::currentRouteName() == 'user.create_post') ? ' active' : ''}}">
                    <a class="nav-link text-dark" href="{{route('ArticleHome')}}">Статьи</a>
                </li>
                <li class="nav-item {{ (Route::currentRouteName() == 'user.create_post') ? ' active' : ''}}">
                    <a class="nav-link text-dark" href="{{route('forum')}}">Форум</a>
                </li>
                @if(Auth::check())

                <li class="nav-item {{ (Route::currentRouteName() == 'user.create_post') ? ' active' : ''}}">
                    <a class="nav-link text-dark" href="{{route('user.create_post')}}">Создать статью</a>
                </li>

                <li class="nav-item {{ (Route::currentRouteName() == 'user.my_post') ? ' active' : ''}}">
                    <a class="nav-link text-dark" href="{{route('user.my_post')}}">Мои Статьи</a>
                </li>

                <li class="nav-item {{ (Route::currentRouteName() == 'user.profile') ? ' active' : ''}}" >
                    <a class="nav-link text-dark" href="{{route('user.profile')}}">Аккаунт</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{route('user.logout')}}">Выйти</a>
                </li>

                @else

                <li class="nav-item">
                    <a class="nav-link text-dark" href="/login">Войти</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="/register">Регистрация</a>
                </li>

                @endif


            </ul>
        </div>
    </div>
</nav>
<div class="container">

        @yield('sidebar')

</div>
<div class="container-xxl">
    @yield('info')
    </div>
    {{-- <div class="container-xxl">
        @yield('info2')
        </div> --}}
<div class="container top">

    <div class="row">

        @yield('content-full')





    </div>

</div>
<div class="container" >

    @yield('content')

</div>
<div class="container-xxl">
    @yield('footer')
    </div>


<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@stack('scripts')
</body>

</html>
