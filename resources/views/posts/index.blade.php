@extends('layouts.app')

@section('title','Posts')
@section('title','Posts2') {{-- No se renderiza --}}

@push('meta')
<meta name="description" content="Listado de posts">
@endpush

@push('meta')
<meta name="keywords" content="posts, listado">
@endpush

@section('content')
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
@endsection