<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return $projects;
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        return $project;
    }
}
