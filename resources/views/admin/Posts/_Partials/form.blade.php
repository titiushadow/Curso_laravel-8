@if ($errors->any())
    <ul>
        @foreach ($errors as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif


    @csrf
    <input type="file" name="image" id="image">
    <label for="text" class="form-label">titulo</label>
    <input type="form-control" class="form-control" id="title" placeholder="Titulo" value="{{ $Post->title ?? old('title') }}">
  </div>

  <div class="mb-6">
    <label for="text" class="form-label">Descrição</label>
    <textarea class="form-control" id="content" rows="3" value="{{ $Post->content ?? old('content') }}">
    </textarea>
  </div>

  <button type="submit">Enviar</button>
