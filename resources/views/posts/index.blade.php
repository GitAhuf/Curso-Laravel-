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

    {{-- @for ($i = 1; $i <= 10; $i++)
        <p>{{$i}}</p>        
    @endfor --}}

    @php 
        $i = 1;
    @endphp

    @while ($i <= 10)
        <p>
            {{$i}}
        </p>
        @php
            $i++;
        @endphp        
    @endwhile
</body>
</html>