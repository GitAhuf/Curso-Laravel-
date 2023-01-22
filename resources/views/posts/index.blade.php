<x-layout>

    <x-slot name="title">
        Posts
    </x-slot>

    {{-- <x-slot name="meta">
        <meta name="description" content="Listado de posts">
    </x-slot> --}}

    @push('meta')
        <meta name="description" content="Listado de posts">
    @endpush

    <h1>
        aqui se mostrara el listado de post        
    </h1>
    
    <ul>
        @forelse ($posts as $post)
        <li @class([
            'color-red' => $loop->iteration % 2 == 0,
            'color-green' => $loop->iteration % 2 != 0
            ])> 
                {{$post['title'] . ' - indice: ' . $loop->index . ' - interaccion: ' . $loop->iteration}} 
            </li>
        @empty
            <li>
                No hay nada
            </li>
        @endforelse
    </ul>
    
</x-layout>