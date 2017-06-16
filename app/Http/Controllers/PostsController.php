<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($id)
    {
       $posts = Post::findOrFail($id);

        return view('post', ['posts' => $posts]);
    }
}
