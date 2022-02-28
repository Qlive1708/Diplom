<x-home-master>

@section('content')

        <h2 class="my-4">Статьи: Пользователей

        </h2>

    @foreach($posts as $post)
        <div  class="card mb-4">
            <a href="{{route('post', $post->id)}}"> <img class="card-img-top" src="{{asset($post->post_image)}}" alt="Card image cap">
            </a>
                <div class="card-body">
                    <h3 class="card-title">Название: {{$post->title}}</h3>
                    {{-- <p class="card-text">Описание: {{Str::limit($post->body, '50', '.....')}}</p> --}}
                    {{-- <a href="{{route('post', $post->id)}}" class="btn btn-primary">Читать дальше</a> --}}
                </div>

            <div class="card-footer text-white">
                Опубликовано {{$post->created_at->diffForHumans()}}
            </div>
        </div>
        @endforeach



            <div style="">
                @include('pagination.limit_links', ['paginator' => $posts])</div>


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


</x-home-master>
