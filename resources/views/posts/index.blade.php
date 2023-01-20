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
        
        {{$etiqueta}} {{--//muestra lo que hay en la variable como string //Escapar codigo html --}}
        {!!$etiqueta!!}{{--  //muestra la variable --}}
        
    </p>
</body>
</html>