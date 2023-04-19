<x-layout>
    <h1>aqui se mostrara el formulario para crear un nuevo posts</h1>  
    <center class="center">
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        {{-- Name --}}
        <div>
            <label for="title">Título</label>
            <br>
            <input type="text" name="title" id="title">
        </div>
        <br>
        {{-- Slug --}}
        <div>
            <label for="slug">Slug</label>
            <br>
            <input type="text" name="slug" id="slug">
        </div>
        <br>
        {{-- Body --}}
        <div>
            <label for="">Contenido</label>
            <br>
            <Textarea name="body" id="body" cols="30" rows="10" ></Textarea>
        </div>
        <br>
        {{-- Users --}}
        <div>
            <label for="user_id">Usuarios</label>
            <br>
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <br>
            <br>
        </div>
        {{-- Categories --}}
        <div>
            <label for="category_id">Categorías</label>
            <br>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <br>
            <br>
        </div>

        <div>
                <button type="submit">Enviar</button>
        </div>
            
        </form>
    </center>
</x-layout>
