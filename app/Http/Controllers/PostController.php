<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return $posts;
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return $post;
    }
}
