<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <div class="container mx-auto py-12">

            @php
                $type = 'danger';
            @endphp
            
            <x-alert :type="$type" class="mb-32">
{{-- 
                <x-slot name="title">
                    Titulo de prue
                </x-slot> --}}
                Esto es un texto de prueba
            </x-alert>
            <p>dfsfsd</p>
        </div>
    </body>
</html>
