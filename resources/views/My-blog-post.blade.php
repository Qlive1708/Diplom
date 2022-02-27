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

    <div class="card my-4">
        <h5 class="card-header">Категории</h5>
        <div class="card-body">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-6">
                        <a href="{{ url('/search')."/".$category->id }}" >{{ $category->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


      @endsection

</x-home-master>
