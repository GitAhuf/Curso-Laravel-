<?php

 namespace App\Http\Controllers;

 class PostController extends Controller 
 {
   public function index()
   {
      return view('posts.index', [
         'prueba' => 'Este es un mensaje de prueba desde index'
      ]);//
   }

   public function create()
   {
      return view('posts.create');//
   }

   public function store()
   {
      return 'Aquí se procesará el post';
   }

   public function show($post) 
   {
      //Forma 1
      /* 
      return view('posts.show', [
            'post' => $post
         ]);         
      */

      //enviando con el metodo compact
      /* 
         return compact('post'); // {"post":"laravel 9"}
      */

      //Metodo with
      // return view('posts.show')->with('post', $post);
      
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