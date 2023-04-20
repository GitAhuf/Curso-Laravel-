<x-layout>
    <div class="container mx-auto py-12">
        <h1>aqui se mostrara el editar un posts editable</h1>

        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{route('posts.update', $post)}}" method="POST">
            @csrf

            @method('PUT')
            {{-- Name --}}
            <div>
                <label for="title">Título</label>
                <br>
                <input type="text"  value="{{old('title', $post->title)}}" name="title" id="title">
            </div>
            <br>
            {{-- Slug --}}
            <div>
                <label for="slug">Slug</label>
                <br>
                <input type="text" value="{{old('slug', $post->slug)}}" name="slug" id="slug">
            </div>
            <br>
            {{-- Body --}}
            <div>
                <label for="">Contenido</label>
                <br>
                <Textarea name="body" id="body" cols="30" rows="10" >{{old('body',$post->body)}}</Textarea>
            </div>
            <br>        
            <br>
            {{-- Users --}}
            <div>
                <label for="user_id">Usuarios</label>
                <br>
                <select name="user_id" id="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" @selected(old('user_id', $post->user_id) == $user->id)>{{ $user->name }}</option>
                    @endforeach
                </select>
                <br>
                <br>
            </div>
            {{-- Categories --}}
            <div>
                <label for="category_id">Categorías</label>
                <br>
                <select name="category_id" value="{{$post->category_id}}" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"  @selected(old('category_id', $post->category_id) == $category->id)>{{ $category->name }}</option>
                    @endforeach
                </select>
                <br>
                <br>
            </div>
    
            <div>
                    <button type="submit">Enviar</button>
            </div>
                
            </form>
    </div>
</x-layout>
