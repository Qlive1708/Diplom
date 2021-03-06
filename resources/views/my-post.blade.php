<x-home-master>

    <style>
        .modal-header{ display: block; !important;}
    </style>

@section('content-full')

        <h2 class="my-4 font">Мои<small> статьи</small>
        </h2>



            <div class="container">
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif

                @if($posts->count()>0)
                @foreach($posts as $post)
                <div class="card mt-2" >

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-footer text-muted">


                                    @if($post->status == 'in-active')
                                        <span class="text-danger">Не опубликован</span>
                                    @endif
                                    @if($post->status == 'active')
                                        <span class="text-success">Опубликован</span>
                                    @endif

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="img-fluid lazyloaded" style="background-image: url({{$post->post_image}}); height: 100px;width: 150px;
                                    background-repeat: no-repeat; background-size: contain;
                                    background-position: center; font-size: 15px; margin: 10px">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h2 class="card-title">{{$post->title}}</h2>


                                <div style="float: right">
                                <a href="{{route('post', $post->id)}}" class="button7">Читать дальше</a>
                                <a href="{{route('user.my_post.edit', $post->id)}}" class="button7">Редактировать</a>
                                {{--<a href="{{route('post', $post->id)}}" class="btn btn-danger">Delete Post &rarr;</a>--}}
                                <button class="button7" type="button" data-toggle="modal" data-target="#myModal{{$post->id}}"
                                        >Удалить</button>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-footer text-muted">
                                Опубликовано: {{$post->created_at}}
                            </div>
                        </div>

                    </div>
                </div>

                <div id="myModal{{$post->id}}" class="fade modal modal-danger" role="dialog">
                    <form method="post" action="{{route('user.mypost.destroy', $post->id)}}" enctype="multipart/form-data" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Delete Post</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this post?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
                @else
                        <div class="card mt-2" >

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <p class="card-text">Ничего нет</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endif

            </div>


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

</x-home-master>
