<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Curso_laravel-8</title>
  </head>

  <body>
    <h1 class="text-center">Cadastro de Posts</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

  <form action="{{ route('posts.store') }}" method="POST">
  <div class="mb-6">
      @csrf
    <label for="text" class="form-label">titulo</label>
    <input type="form-control" class="form-control" id="title" placeholder="Titulo" value="{{ old('title') }}">
  </div>

  <div class="mb-6">
    <label for="text" class="form-label">Descrição</label>
    <textarea class="form-control" id="content" rows="3" value="{{ old('title') }}"></textarea>
  </div>
  <button type="submit">Enviar</button>
    </form>

  </body>
</html>
