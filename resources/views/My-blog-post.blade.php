<script>
    function reply(id){
        document.getElementById('reply_'+id).style.display="block";
    }
</script>
<x-home-master>

    @section('content')
            <h1 class="mt-4">{{$post->title}}</h1>

            <p class="lead">
               <p>Автор: {{$post->user->name}}</p>
            </p>

            <hr>

            <p>Опубликовано: {{$post->created_at->diffForHumans()}} </p>

            <hr>

            <img class="img-fluid rounded" src="{{$post->post_image}}" alt="">

            <hr>

            <p>{{$post->body}}</p>

            <hr>

        @endsection

        @section('sidebar')




    <div class="card my-4">
        <h5 class="card-header">Поиск</h5>
        <form method="get" action="/">
            <div class="card-body">
                <div class="input-group">

                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Искать..."
                           value = "@if(isset($_REQUEST['keyword'])){{ $_REQUEST['keyword'] }}@endif">
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-secondary" type="button" value="Поиск">
                        </span>

                </div>
            </div>
        </form>
    </div>

    <div class="optiogendous">
        <h3 class="tonolsdmy-koumususe">Категории</h3>
        <ul class="mususeres-mendous">
            @foreach ($categories as  $category)
            <li><a href=""href="{{ url('/search')."/".$category->id }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
      </div>


      @endsection

</x-home-master>
