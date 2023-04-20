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
      $post = Post::findOrFail($post);
      return view('posts.show', compact('post'));
   }

   public function edit($post)
   {      
      $post = Post::findOrFail($post);

      $categories = Category::all();
      $users = User::all();
      return view('posts.edit', compact('post','categories', 'users'));
   }

   public function update(Request $request, $post)
   {  
      $post = Post::findOrFail($post);

      $post->update($request->all());
      return "post actualizado";      
   }

   public function destroy($post)
   {
      $post = Post::findOrFail($post);
      $post->delete();
      return "El Post se elimino Correctamente";
   }
 }