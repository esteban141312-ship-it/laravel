<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/miblog',function(){
// $posts = [
// ["title" => "first post"],
// ["title" => "second post"],
// ["title" => "third post"],
// ["title" => "fourth post"],

// ];
// return view( 'miblog',['posts'=> $posts]);

// })->name('blog');



Route::get('/', function () {
    return view('welcome');
});

// Route::view('/about','about');
Route::view('/nosotros','about')->name('about');
// Route::view('/miblog','blog')->name('blog');
Route::view('/contact','contact')->name('contactanos');
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();
// Route::match(['put']);


$posts = [
    ['id' => 1, 'title' => 'Blog 1', 'body' => 'Este es el contenido del blog 1.'],
    ['id' => 2, 'title' => 'Blog 2', 'body' => 'Este es el contenido del blog 2.'],
];

Route::get('/miblog', function () use ($posts) {
    return view('blog.index', ['posts' => $posts, 'post' => null]);
})->name('blog');

Route::get('/miblog/{id}', [PostController::class, 'show'])->name('posts.show');
