<x-layout>
    <div class="container mx-auto py-12">
    
        <h1>
            {{$post->title}}
        </h1>    

        <p>{{$post->body}}</p>

        <a href="{{route('posts.edit', $post)}}">Editar post</a>
    </div>
</x-layout>
