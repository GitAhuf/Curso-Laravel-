<x-layout>
    <div class="container mx-auto py-12">

    
    <x-slot name="title">
        Posts
    </x-slot>

    @push('meta')
        <meta name="description" content="Listado de posts">
    @endpush

    <h1>Aqui se mostrará el listado de posts</h1>

    <a href="{{route('posts.create')}}">Crear nuevo posts</a>

    <ul>
        @forelse ($posts as $post)
        <li>
            <a href="{{route('posts.show', $post->id)}}">
                {{ $post->title}}
            </a>
        </li>
        @empty

            <li>No hay post</li>
            
        @endForelse
    </ul>

    <div class="w-full text-center">
        {{ $posts->links() }}
    </div>
    </div>

</x-layout>