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
    
    {{--     
        @if (false)
            <p>
                Este mensaje se mostrará si le pasamos el valor de verdadero a la condicional
            </p>
        @elseif(true)
            <p>
                Este mensaje se mostrara si le pasamos el valor de falso a la condicional
            </p>
        @endif
    --}}

    {{-- 
        @isset($prueba)
            <p>La variable prueba se encuentra declarada</p>
        @else
            <p>La variable prueba no se encuentra declarada</p>
        @endisset

    --}}

    @empty($prueba)
        la Variable prueba es nula
    @endempty
</body>
</html>