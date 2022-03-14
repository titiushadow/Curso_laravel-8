<h1>Posts</h1>

@if(session('message'))
<div>
    {{ session('message') }}
</div>
@endif

@foreach ($posts as $Post )
    <p>{{$Post->title}} [<a href="{{ route('posts.show' , $Post -> id)  }}">Ver]</a></p>
@endforeach

<button>
<a href="{{ route('posts.create') }}">Criar um novo Post</a>
</button>
