<script>
    function reply(id){
        document.getElementById('reply_'+id).style.display="block";
    }
</script>
<x-home-master>

    @section('content')
            <h2 class="mt-4">{{$post->title}}</h2>

            <p class="lead">
               <p>Автор: {{$post->user->name}}</p>
            </p>

            <hr>

            <p>Опубликовано: {{$post->created_at->diffForHumans()}} </p>

            <hr>

            <img class="img-fluid rounded" src="{{$post->post_image}}" alt="">

            <hr>

            {!! $post->body !!}

            <hr>

            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif

            <div class="card my-4">
                <h5 class="card-header">Оставить комментарий:</h5>
                <div class="card-body">
                    <form method="post" action="{{ route('post.addcomment') }}" id="store_comment">
                        {{ @csrf_field() }}
                        <div class="form-group">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <textarea class="form-control" rows="3" name="comment" id="comment" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-fiol">Отправить</button>
                    </form>
                </div>
            </div>

            @include('parties.replys', ['comments' => $comments, 'post_id' => $post->id])

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
                <div class="col-lg-6">
                    <a href="{{ url('/search')."/".$category->id }}" >{{ $category->name }}</a>
                </div>
                @endforeach
            </ul>
          </div>





      @endsection

</x-home-master>
