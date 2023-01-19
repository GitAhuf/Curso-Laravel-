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
    // return 'hello word';
});

/*
Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); //Espera una peticion de tipo get
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');

Route::post('/posts', [PostController::class, 'store'])->name('post.store'); //Espera una peticionde tipo post

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show'); //Detalle
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
*/

/*
    ///Genera las siete rutas necesarias para un crud
    Route::resource('posts', PostController::class); 
*/

/*
    ///Genera unicamente el metodo index y show
    Route::resource('posts',PostController::class)->only([
        'index', 'show'    
    ]);
*/

/*
    ///Genera todas excepto la excepcion
    Route::resource('posts', PostController::class)->except([
        'destroy'
    ]);
*/

// Route::resource('articulos', PostController::class);
Route::resource('articulos', PostController::class)
    ->parameters([
        'articulos' => 'post'
    ])
->names('posts'); 

Route::get('/about', AboutController::class)
        ->name('about');



// Route::get('/prueba',function () {
//     return 'hola desde la ruta prueba';
// });

// Route::get('/curso/informacion', function () {
//     return "Este es el mejor curso";

// });

// Route::get('/lectura/{lectura}/{category?}', function ($lectura, $category = "Sin categoria") {
//     return "Bienvenido a lectura $lectura " . "de la categoria: $category";
// });

// Route::get('/curso/{curso}/{category?}', function ($curso, $category = null) {
//     if($category){
//         return "Bienvenido al curso $curso " . "de la categoria $category";
//     }
//     return "Bienvenido al curso $curso ";
// });

// Route::get('/taller/{taller}', function ($taller) {
//     return "Bienvenido al taller $taller";
// })->where('taller', '[A-Za-z]+');

// Route::get('/dictado/{dictado}', function ($dictado) {
//     return "Bienvenido al dictado $dictado";
// })->whereAlpha('dictado'); // Especifica q lo que espera en el paramero de tipo texto

// Route::get('/evaluacion/{evaluacion}', function ($evaluacion) {
//     return "Bienvenido a la evaluacion numero : $evaluacion";
// })->whereAlphaNumeric('evaluacion'); // Valida numeros y letras
 
// Route::get('/audiocurso2/{id}', function ($id){
//     return "el audio curso numero $id";
// });
