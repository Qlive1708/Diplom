<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog-Portfolio</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rega.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
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
                            <a class="nav-link text-dark" href="{{route('user.my_post')}}">Мои заявки</a>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
