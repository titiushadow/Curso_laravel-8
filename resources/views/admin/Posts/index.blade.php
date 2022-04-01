<h1>Posts</h1>

<Form action="{{ route('posts.search')}}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar">
    <button type="submit">Filtrar</button>
</Form>

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
