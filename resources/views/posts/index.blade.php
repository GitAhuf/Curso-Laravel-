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
    <ul>
        @forelse ($posts as $item)
            <li>
                {{$item['title']}} - {{$item['content']}}           
            </li>
        @empty
            <li>No hay posts</li>
        @endforelse
    </ul>
</body>
</html>