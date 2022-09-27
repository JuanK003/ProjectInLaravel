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
    <title>Listar Posts</title>
</head>
<body>
    @include('dashboard.partials.nav-header-main')
    <br><br><br>
    <div class="container">
        <a class="btn btn-success" href={{route('post.create')}}>Crear</a>
        <br><br>
        <table class="table">
            <thead>
                <tbody>
                    <tr>
                        <td>
                            Id
                        </td>
                        <td>
                            Titulo
                        </td>
    
                        <td>
                            Ruta
                        </td>

                        <td>
                            Contenido
                        </td>
    
                        <td>
                            Creacion
                        </td>
    
                        <td>
                            Actualizado
                        </td>
                        <td>
                            Acciones
                        </td>
                    </tr>
                </tbody>
    
                @foreach($posts as $post)
                    <tr>
                        <td>
                            {{$post->id}}
                        </td>
            
                        <td>
                            {{$post->title}}
                        </td>
            
                        <td>
                            {{$post->slug}}
                        </td>

                        <td>
                            {{$post->content}}
                        </td>
            
                        <td>
                            {{$post->created_at->format('d-m-Y')}}
                        </td>
            
                        <td>
                            {{$post->updated_at->format('d-m-Y')}}
                        </td>
                        <td>
                            <a href="{{route('post.show', $post->id)}}" class="btn btn-primary">Ver</a>
                            <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">Editar</a>
                            <form method="POST" action="{{route('post.destroy',$post->id)}}">
                                @method('DELETE')
                                @csrf
                                <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{$post->id}}" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
            {{$posts->links()}}
        </table>

        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Alerta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                <p>¿Estas seguro de eliminar el post de {{$post->title}}?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form method="POST" action="{{route('post.destroy',$post->id)}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>        
            </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>

@section('script')
    <script>
        const exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const recipient = button.getAttribute('data-id') 
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //  
        // Update the modal's content.
        const modalTitle = exampleModal.querySelector('.modal-title')
        const modalBodyInput = exampleModal.querySelector('.modal-body input')

        modalTitle.textContent = `Eliminar el post ${recipient}`
        modalBodyInput.value = recipient
        })
    </script>
@endsection