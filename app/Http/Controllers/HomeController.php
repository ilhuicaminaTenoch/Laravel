<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('autor')->get();


        return view('home',['posts' => $posts]);
    }
}
