<h1>Posts</h1>

@foreach ($posts as $Post )
    <p>{{$Post->title}}</p>
    <p>{{$Post->content}}</p>
@endforeach
