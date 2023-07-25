<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($slug)
    {
        $tag = Tag::where('slug', $slug)->with('posts')->firstOrFail();

        return $tag;
    }
}
