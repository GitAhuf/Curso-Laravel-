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
      $post = Post::create($request->all());
      // return 'El post se creo con exito, datos almaccenados: ';
      return redirect()->route('posts.edit', $post);
   }

   public function show(Post $post) 
   { 
      return view('posts.show', compact('post'));
   }

   public function edit(Post $post)
   {      
      $categories = Category::all();
      $users = User::all();
      return view('posts.edit', compact('post','categories', 'users'));
   }

   public function update(Request $request,Post $post)
   {  
      $post->update($request->all());
      return redirect()->route('posts.edit',$post);      
   }

   public function destroy(Post $post)
   {
      $post->delete();
      return redirect()->route('posts.index');
   }
 }