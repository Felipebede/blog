<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    public function index()
    {
        $posts = \App\Post::all();

        return view('blog.home', compact('posts'));
    }



}
