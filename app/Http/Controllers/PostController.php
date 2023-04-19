<?php

 namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

 class PostController extends Controller 
 {
   public function index()
   {      

      $posts = Post::paginate(5);

      return view('posts.index', compact('posts'));//
   }

   public function create()
   {  

      $categories = Category::all();
      $users = User::all();
      return view('posts.create', compact('categories','users'));
   }

   public function store(Request $request)
   {
      Post::create($request->all());
      return 'El post se creo con exito, datos almaccenados: ';
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