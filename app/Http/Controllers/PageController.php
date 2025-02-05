<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // $posts = Post::get(); // consulta get de elocuent a la tabla
        //$post = Post::first(); // mostrar la info del primer registro en formato json
        //$post = Post::find(25); // buscar por id
        //dd($post);

        $posts = Post::latest() -> paginate(); 
 
        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
