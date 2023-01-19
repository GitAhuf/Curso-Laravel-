<?php

 namespace App\Http\Controllers;

 class PostController extends Controller 
 {
   public function index()
   {
      return view('posts.index');//
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
      return view('posts.show');//
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