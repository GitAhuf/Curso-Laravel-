<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- @isset($meta)
        {{ $meta }}
    @endisset --}}

    {{-- Directiva de blade --}}

    @stack('meta')
        
    <title>{{ $title ?? 'Coders Free' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="container mx-auto">
        <ul>
            <li>
                <a href="{{route('welcome')}}">Home</a>
            </li>
            <li>
                <a href="{{route('posts.index')}}">Posts</a>
            </li>
        </ul>
    </nav>
    {{ $slot }}

</body>
</html>