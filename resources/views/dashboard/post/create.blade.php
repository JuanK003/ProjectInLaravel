<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/form.css')}}">
    <title>Mi primer CRUD</title>
</head>
<body>
    <h1 class="Title"><a href="">Ingreso de Post</a></h1><br><br>

    <form action="{{route('post.store')}}" method='post' class="form">
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="title" placeholder="Escribe el Título">

        <label for="">URL Corta</label>
        <input type="text" name="slug" placeholder="Colaca la URL">

        <label for="">Descripción</label>
        <textarea name="description" placeholder="Coloca descripción"></textarea>

        <label for="">Contenido</label>
        <textarea name="content" placeholder="Colaca el contenido"></textarea>

        <button type='submit'>Enviar</button>
    </form>
</body>
</html>