<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        aqui se mostrara el listado de post        
    </h1>

    {{-- <ul>
        @forelse ($posts as $post)
            <li @if($loop->last ) style="color:red" @endif> 
                {{$post['title'] . ' - indice: ' . $loop->index . ' - interaccion: ' . $loop->iteration}} 
            </li>
        @empty
            <li>
                No hay nada
            </li>
        @endforelse
    </ul> --}}
    {{-- <ul>
        @forelse ($posts as $post)
            <li @if($loop->iteration % 2 == 0) style="color:red" @else style="color:green" @endif> 
                {{$post['title'] . ' - indice: ' . $loop->index . ' - interaccion: ' . $loop->iteration}} 
            </li>
        @empty
            <li>
                No hay nada
            </li>
        @endforelse
    </ul> --}}
    <ul>
        @forelse ($posts as $post)
            <li @if($loop->iteration % 2 == 0) style="color:red" @else style="color:green" @endif> 
                {{$post['title'] . ' - indice: ' . $loop->index . ' - interaccion: ' . $loop->iteration . ' Faltan iterar: ' . $loop->remaining}} 
            </li>
        @empty
            <li>
                No hay nada
            </li>
        @endforelse
    </ul>
</body>
</html>