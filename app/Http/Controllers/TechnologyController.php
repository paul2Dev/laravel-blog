<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function show($slug)
    {
        $technology = Technology::where('slug', $slug)->with('projects')->firstOrFail();

        return $technology;
    }
}
