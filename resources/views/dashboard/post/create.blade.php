<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/form.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Mi primer CRUD</title>
</head>
<body>
    <h1 class="Title"><a href="">Ingreso de Post</a></h1><br><br>
    <form action="{{route('post.store')}}" method='post' class="form">
       {{--  @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif --}}
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="title" placeholder="Escribe el Título">
        @error("title")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">URL Corta</label>
        <input type="text" name="slug" placeholder="Colaca la URL">
        @error("slug")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Descripción</label>
        <textarea name="description" placeholder="Coloca descripción"></textarea>

        <label for="">Contenido</label>
        <textarea name="content" placeholder="Colaca el contenido"></textarea>
        @error("content")
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror

        <button type='submit'>Enviar</button>
    </form>
</body>
</html>