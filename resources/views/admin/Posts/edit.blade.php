@extends('admin.Posts.layouts.app')

@section('title', 'Editar o Post'{$Post->title})

@section('content')
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Curso_laravel-8</title>
  </head>

  <body>
    <h1 class="text-center">Editar o Post<strong>{{ $Post->title }}</strong></h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

  <form action=" {{ route('post.update', $Post->id)  }} " method="POST">
  <div class="mb-6">
      @method('put')
      @include('admin.pages._partials.form')
    </form>

  </body>
</html>

@endsection
