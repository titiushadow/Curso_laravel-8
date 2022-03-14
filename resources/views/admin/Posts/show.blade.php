<h1>Detalhes do Post {{$Post->title}}</h1>

<ul>
    <li><strong>Titulo: {{$Post->title}}</strong></li>
    <li><strong>Conteudo: {{$Post->content}}</strong></li>
</ul>

<form action="{{'posts.destroy' , $Post->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit"> Deleter a Postagem: {{ $Post->title}}</button>
</form>
