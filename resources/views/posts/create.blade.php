<x-layout>
    <div class="container mx-auto py-12">
        <h1>Aqui se mostrara el formulario para crear un nuevo posts</h1>  

        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        {{-- Name --}}
        <div>
            <label for="title">Título</label>
            <br>
            <input type="text" name="title" value="{{ old('title')}}" id="title" class="form-control @error('title') border-danger @enderror">

            @error('title')
                <div>
                    <small class="text-danger">{{$message}}</small>
                </div>
            @enderror
        </div>
        <br>
        {{-- Slug --}}
        <div>
            <label for="slug">Slug</label>
            <br>
            <input type="text" name="slug" value="{{old('slug')}}" id="slug" class="form-control  @error('slug') border-danger @enderror">
            @error('slug')
            <div>
                <small class="text-danger">{{$message}}</small>
            </div>

            @enderror
        </div>
        <br>
        {{-- Body --}}
        <div>
            <label for="">Contenido</label>
            <br>
            <Textarea name="body" id="body"  cols="30" rows="10" class="form-control  @error('body') border-danger @enderror">{{old('body')}}</Textarea>

            @error('body')
                <div>
                    <small class="text-danger">{{$message}}</small>
                </div>
            @enderror
        </div>
        <br>        
        <br>      
        {{-- Categories --}}
        <div>
            <label for="category_id">Categorías</label>
            <br>
            <select name="category_id" id="category_id" class="form-control  @error('category_id') border-danger @enderror">
                @foreach ($categories as $category)
                    <option @selected(old('category_id') == $category->id) value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <small class="text-dange">{{$message}}</small>
            @enderror
            <br>
            <br>
        </div>

          {{-- Users --}}
          <div>
            <label for="user_id">Usuarios</label>
            <br>
            <select name="user_id" id="user_id" class="form-control  @error('user_id') border-danger @enderror">
                @foreach ($users as $user)
                    <option @selected(old('user_id') == $user->id) value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error('user_id')
            <small class="text-dange">{{message}}</small>
        @enderror
            <br>
            <br>
        </div>

        <div>
                <button type="submit">Enviar</button>
        </div>
            
        </form>
    </div>
</x-layout>
