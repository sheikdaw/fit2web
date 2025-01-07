<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->take(5)->get();
        foreach ($projects as $project) {
            $project->advantages = json_decode($project->advantages[0] ?? '[]', true);
        }
        return view('index', compact('projects'));
    }
}
