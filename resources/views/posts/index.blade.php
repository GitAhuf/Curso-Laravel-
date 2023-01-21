<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .color-red {
            color: red;
        }

        .color-green {
            color: green;
        }
    </style>
</head>
<body>
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
</body>
</html>