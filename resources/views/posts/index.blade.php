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
    <p>        
        este es un parrafo
    </p>

    @switch($valor)
        @case('a')
            <p>El valor es a</p>
            @break
        @case('e')
        <p>El valor es e</p>
            @break
        @case('i')
        <p>El valor es i</p>
            @break
        @case('o')
        <p>El valor es o</p>
            @break
        @case('u')
        <p>El valor es u</p>
            @break
        @default
        <p>El valor no es vocal</p>
    @endswitch
</body>
</html>