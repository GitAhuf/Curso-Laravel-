<?php

 namespace App\Http\Controllers;

 use Illuminate\Http\Request;

 class PostController extends Controller 
 {
   public function index()
   {
      $posts = [
         [
            'id' => 1,
            'title' => 'Post 1',
            'content' => 'Content 1'
         ],
         [
            'id' => 2,
            'title' => 'Post 2',
            'content' => 'Content 2'
         ],
         [
            'id' => 3,
            'title' => 'Post 3',
            'content' => 'Content 3'
         ]
      ];

      return view('posts.index', compact('posts'));//
   }

   public function create()
   {
      return view('posts.create');//
   }

   public function store(Request $request)
   {

      // return $request->all(); //trayendo todos los inputs
      // return $request->input('title'); // Trayendo el input title
      // return $request->path(); //Trayendo el path
      // return $request->url(); //obteniendo url
      // return $request->host(); // obteniendo Host
      // return $request->method(); // obteniendo Host
      // return $request->ip(); // obteniendo Host

      // $data = $request->collect(); // obteniendo el array como coleccion
      // return $data->first(); //obteniendo el primer elementos de la coleccion

      // $data = $request->only('title','slug','body');
      $data = $request->except("_token");
      return $data;
      return 'Aquí se procesará el post';
   }

   public function show($post) 
   {    
      return view('posts.show', compact('post'));
   }

   public function edit($post)
   {
      return view('posts.edit');// http://example3.test/posts/1/edit
   }

   public function update($post)
   {
      return "El posts a actualizar es $post";
   }

   public function destroy($post)
   {
      "Aquí se eliminará el post $post";
   }
 }