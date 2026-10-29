<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

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


Route::get('/miblog', function () {
    return view('posts.index', ['posts' => Post::all()]);
})->name('blog');

Route::get('/miblog/{post}', [PostController::class, 'show'])->name('posts.show');
