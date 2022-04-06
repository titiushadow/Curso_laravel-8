@extends('admin.Posts.layouts.app')

@section('title' , 'Criar novo Post')

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
    <h1 class="text-center">Cadastro de Posts</h1>

  <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @include('admin\Posts\_Partials\form')
    </form>

  </body>
</html>

@endsection
