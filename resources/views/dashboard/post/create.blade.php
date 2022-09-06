<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/categories.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Crear Post</title>
</head>
<body>
    @include('dashboard.partials.nav-header-main')
    <form action="{{route('post.store')}}" method='post' class="form-register">
        @include('dashboard.partials.sesion-flash-status')
        <h4>Crear de Post</h4>
        <label for="">Titulo</label>
        <input class="controls" type="text" name="title" value="{{old('title')}}" id="title" placeholder="Title">
        @error("title")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">URL Corta</label>
        <input class="controls" type="text" name="slug" value="{{old('slug')}}" id="slug" placeholder="Slug">
        @error("slug")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror
        <label for="">Contenido</label>
        <textarea class="controls" type="text" name="content" id="content" placeholder="content">{{old('content')}}</textarea>
        @error("content")
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror

        <button type='submit' class="botons">Submit</button>
    </form>
</body>
</html>