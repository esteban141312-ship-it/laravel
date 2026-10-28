<?php
namespace App\Http\Controllers;

class PostController extends Controller
{
    private array $posts = [
        ['id' => 1, 'title' => 'Blog 1', 'body' => 'Este es el contenido del blog 1.'],
        ['id' => 2, 'title' => 'Blog 2', 'body' => 'Este es el contenido del blog 2.'],
    ];

    public function index()
    {
        return view('blog', ['posts' => $this->posts]);
    }

    public function show($id)
    {
        $post = null;

        foreach ($this->posts as $item) {
            if ($item['id'] == $id) {
                $post = $item;
            }
        }

        return view('blog.index', ['posts' => $this->posts, 'post' => $post]);
    }
}
