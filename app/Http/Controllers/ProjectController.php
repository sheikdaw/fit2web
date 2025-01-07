<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function Project()
    {
        $projects = Project::paginate(10); // Fetch 10 records per page

        // Decode JSON advantages into arrays
        foreach ($projects as $project) {
            $project->advantages = json_decode($project->advantages[0] ?? '[]', true);
        }

        return view('admin.project', compact('projects'));
    }


    // Store a new project
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'title_1' => 'required|string|max:255',
            'title_2' => 'required|string|max:255',
            'paragraph_1' => 'required|string',
            'paragraph_2' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'category' => 'required|string|max:255',
            'customer_name' => 'required|string|max:255',
            'advantages' => 'required|array',
            'project_summary' => 'required|string',
            'rating' => 'nullable|integer',
            'ordered_by' => 'nullable|integer',
        ]);

        $project = Project::create($validated);

        return response()->json($project); // Return the newly created project
    }

    // Fetch project details for editing
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return response()->json($project);
    }

    // Update project details
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'title_1' => 'required|string|max:255',
            'title_2' => 'required|string|max:255',
            'paragraph_1' => 'required|string',
            'paragraph_2' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'category' => 'required|string|max:255',
            'customer_name' => 'required|string|max:255',
            'advantages' => 'required|array',
            'project_summary' => 'required|string',
            'rating' => 'nullable|integer',
            'ordered_by' => 'nullable|integer',
        ]);

        $project = Project::findOrFail($id);
        $project->update($validated);

        return response()->json($project); // Return the updated project
    }
}
