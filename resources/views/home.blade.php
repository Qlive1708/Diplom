<x-home-master>
@section('info')
<div class="container info">
    <div class="row">
    <div  class="center">
        <h2 class="text-center">Воспользуйтесь полезными информациями<br>
        для обучение в сфере веб разработки</h2>
    </div>
<div class="center">
    <img class="logotip img-fluid" src="/storage/public/logo/laravel-2.svg" alt="">
    <img class="logotip img-fluid" src="/storage/public/logo/yii.svg" alt="">
    <img class="logotip img-fluid" src="/storage/public/logo/vue-844.svg" alt="">
    <img class="logotip img-fluid" src="/storage/public/logo/react-446.svg" alt="">
    <img class="logotip img-fluid" src="/storage/public/logo/php-243.svg" alt="">
    <img class="logotip img-fluid" src="/storage/public/logo/javascript-455.svg" alt="">

</div>
<div class="center-2">
    <img class="imginfo img-fluid" src="/storage/public/logo/macbook.png" alt="">
</div>
    </div>
</div>

@endsection

@section('content')
<div class="extra-description post-entry"><h2>Кто такой веб-разработчик</h2>
    <p>Это специалист, который переводит оформления сайта, созданное дизайнером в веб-форму. Из рук веб-программиста выходит уже не картинка или макет, а живой, функциональный сайт, где пользователь может найти нужную ему информацию, заказать товары или услуги, оставить комментарий или отзыв.<br>
    Всех веб-программистов разделяют на две группы в зависимости от сферы занятости:</p>
    <ol>
    <li>Frontend developers. Это программист, который занимается визуальной частью сайта, тем, что мы видим в браузере. Его основные инструменты – CSS, HTML и Javascript.</li>
    <li>Backend developer. Это специалисты, которые работают с серверной или внутренней частью сайта. Они делают так, чтобы сайт работал правильно. Его инструменты PHP, Java, Python, Ruby и другие языки.</li>
    </ol>
    <p>Еще есть третья категория веб-программистов – Fullstack. Это многорукие специалисты, они знают и фронтенд и бэкенд, могут совмещать оба направления.<br>
    В этом разделе блога мы рассказываем о веб-разработке. Помогаем разобраться со сложными терминами, рассказываем, как выстроить карьеру в любом направлении веб-разработки.</p>
    <h2>Как стать веб-разработчиком</h2>
    <p>Альтернативных путей несколько:</p>
    <ul>
    <li>учиться самому – это долго и сложно. Времени не всегда достаточно, а наскоком сложные дисциплины не осваиваются;</li>
    <li>учиться в вузе – дорого и долго, но обычно эффективно. Такой путь подходит молодым людям, которые еще не работают и готовы уделять обучению все свое время;</li>
    <li>пойти на курсы – это оптимальный вариант. Курсы недорогие, их можно проходить в свободное время, совмещая с работой. Чтобы вам было проще подбирать подходящую образовательную программу, мы собрали проверенные <a href="https://checkroi.ru/blog/kursy-1s-programmirovaniya/" data-wpel-link="internal" target="_self">онлайн-курсы по программированию</a> в одном месте.</li>
    </ul>
    <p>Мы поможем вам с самостоятельным обучением, направим и поможем разобраться со сложными терминами. Если вы хотите изучать дисциплину глубоко, выбирайте курсы, а мы поможем найти нужный.</p>
    </div>

</div>


            <div style="">
                @include('pagination.limit_links', ['paginator' => $posts])</div>


    @endsection
    @section('content2')
    <div class="extra-description post-entry"><h2>Кто такой веб-разработчик</h2>
        <p>Это специалист, который переводит оформления сайта, созданное дизайнером в веб-форму. Из рук веб-программиста выходит уже не картинка или макет, а живой, функциональный сайт, где пользователь может найти нужную ему информацию, заказать товары или услуги, оставить комментарий или отзыв.<br>
        Всех веб-программистов разделяют на две группы в зависимости от сферы занятости:</p>
        <ol>
        <li>Frontend developers. Это программист, который занимается визуальной частью сайта, тем, что мы видим в браузере. Его основные инструменты – CSS, HTML и Javascript.</li>
        <li>Backend developer. Это специалисты, которые работают с серверной или внутренней частью сайта. Они делают так, чтобы сайт работал правильно. Его инструменты PHP, Java, Python, Ruby и другие языки.</li>
        </ol>
        <p>Еще есть третья категория веб-программистов – Fullstack. Это многорукие специалисты, они знают и фронтенд и бэкенд, могут совмещать оба направления.<br>
        В этом разделе блога мы рассказываем о веб-разработке. Помогаем разобраться со сложными терминами, рассказываем, как выстроить карьеру в любом направлении веб-разработки.</p>
        <h2>Как стать веб-разработчиком</h2>
        <p>Альтернативных путей несколько:</p>
        <ul>
        <li>учиться самому – это долго и сложно. Времени не всегда достаточно, а наскоком сложные дисциплины не осваиваются;</li>
        <li>учиться в вузе – дорого и долго, но обычно эффективно. Такой путь подходит молодым людям, которые еще не работают и готовы уделять обучению все свое время;</li>
        <li>пойти на курсы – это оптимальный вариант. Курсы недорогие, их можно проходить в свободное время, совмещая с работой. Чтобы вам было проще подбирать подходящую образовательную программу, мы собрали проверенные <a href="https://checkroi.ru/blog/kursy-1s-programmirovaniya/" data-wpel-link="internal" target="_self">онлайн-курсы по программированию</a> в одном месте.</li>
        </ul>
        <p>Мы поможем вам с самостоятельным обучением, направим и поможем разобраться со сложными терминами. Если вы хотите изучать дисциплину глубоко, выбирайте курсы, а мы поможем найти нужный.</p>
        </div>

    </div>
    @section('slider')
    <section class="video-container">
        <video src="/storage/public/images/bg.mp4" autoplay loop playsinline muted></video>
        <div class="callout">
          <h2 style="font-size: 24px">Добро пожаловать, здесь вы узнаете тут, что то новое👍</h2>
          <div></div>
        </div>
      </section>
    @endsection
    @section('sidebar')


            <div class="card my-4">

                <form class="form-db" method="get" action="/search">
                    <input type="text"type="text" class="form-control" name="keyword" id="keyword" placeholder="Искать здесь..."
                    value = "@if(isset($_REQUEST['keyword'])){{ $_REQUEST['keyword'] }}@endif">

                    <button class="button-db"  type="submit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                      </svg></button>
                  </form>
            </div>

            <div class="optiogendous">
                <h3 class="tonolsdmy-koumususe">Категории</h3>
                <ul class="mususeres-mendous">
                    @foreach ($categories as  $category)
                    <li> <a href="{{ url('/search')."/".$category->id }}"
                        @if($selected_category == $category->id) style="color: white;background-color:#343A40; padding: 0px 2px" @endif
                     >{{ $category->name }}</a></li>
                    @endforeach
                </ul>
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
