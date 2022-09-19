@include('dashboard.partials.sesion-flash-status')
        <h4>Crear de Post</h4>
        <label for="">Titulo</label>
        <input class="controls" type="text" name="title" value="{{old('title',$post->title)}}" id="title" placeholder="Title">
        @error("title")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">URL Corta</label>
        <input class="controls" type="text" name="slug" value="{{old('slug',$post->slug)}}" id="slug" placeholder="Slug">
        @error("slug")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror
        
        <label for="">Contenido</label>
        <textarea class="controls" type="text" name="content" id="content" placeholder="content">{{old('content',$post->content)}}</textarea>
        @error("content")
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror

        <button type='submit' class="botons">Submit</button>