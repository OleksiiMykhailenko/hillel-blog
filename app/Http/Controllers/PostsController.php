<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function show()
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view("posts.create");
    }
}
