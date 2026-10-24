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


Route::get('/miblog',PostController::class)->name('blog');
