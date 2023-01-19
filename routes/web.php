<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* 
//Manera repetitiva

    Route::get('/posts',[PostController::class, 'index'])->name('posts.index');

    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    Route::get('post/{post}', [PostController::class, 'show'])->name('posts.show');

    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


*/

// Especificando el metodo siguen repitiendose algunas cosas 

/* 
    Route::controller(PostController::class)->group(function(){
        
        Route::get('/posts', 'index')->name('posts.index');
        
        Route::get('/posts/create', 'create')->name('posts.create');
        
        Route::post('/posts', 'store')->name('posts.store');
        
        Route::get('post/{post}', 'show')->name('posts.show');
        
        Route::get('/posts/{post}/edit', 'edit')->name('posts.edit');
        
        Route::put('/posts/{post}', 'update')->name('posts.update');
        
        Route::delete('/posts/{post}', 'destroy')->name('posts.destroy');
    });
*/

//Agregando el metodo prefix
/* 
Route::prefix('posts')->controller(PostController::class)->group(function(){
    
    Route::get('/', 'index')->name('posts.index');
    
    Route::get('/create', 'create')->name('posts.create');
    
    Route::post('/', 'store')->name('posts.store');
    
    Route::get('/{post}', 'show')->name('posts.show');
        
    Route::get('/{post}/edit', 'edit')->name('posts.edit');
    
    Route::put('/{post}', 'update')->name('posts.update');
    
    Route::delete('/{post}', 'destroy')->name('posts.destroy');
});
    
*/

//Eliminando nombres y agregando el metodo name

Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::get('/{post}', 'show')->name('show');
    Route::put('/{post}', 'update')->name('update');
    Route::get('/create', 'create')->name('create');
    Route::get('/{post}/edit', 'edit')->name('edit'); 
    Route::delete('/{post}', 'destroy')->name('destroy');    
});
