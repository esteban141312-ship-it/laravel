<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/about','about');
Route::view('/nosotros','about')->name('about');
Route::view('/miblog','blog')->name('blog');
Route::view('/contact','contact')->name('contactanos');
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();
// Route::match(['put']);


