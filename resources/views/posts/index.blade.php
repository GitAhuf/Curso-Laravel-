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
    <script>
        // let posts = {!! json_encode($posts) !!};
        // console.log(posts);

        // let posts = {{ Js::from($posts)}}
        // console.log(posts);

        let posts = @json($posts);
        console.log(posts);

    </script>
</body>
</html>