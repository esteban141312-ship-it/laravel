<?php
namespace App\Http\Controllers;

class PostController {
    public function __invoke()
    {
  $posts = [
 ["title" => "first post"],
 ["title" => "second post"],
 ["title" => "third post"],
 ["title" => "fourth post"],

];
 return view( 'blog',['posts'=> $posts]);
    }
}