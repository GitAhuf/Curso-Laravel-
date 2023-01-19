<?php

 namespace App\Http\Controllers;

 class PostController extends Controller 
 {
   public function index()
   {
      return 'Aquí se mostrará el listado de los posts';
   }

   public function create()
   {
      return 'Aquí se mostrara el formulario para crear un nuevo post';
   }

   public function store()
   {
      return 'Aquí se procesará el post';
   }

   public function show($post) 
   {
      return "Mostrando nuevo contenido del $post";
   }

   public function edit($post)
   {
      return "El posts a editar es $post";
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