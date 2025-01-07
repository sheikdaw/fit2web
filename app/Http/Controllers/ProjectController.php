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

    public function store(Request $request)
    {
        // Validate the incoming request
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
            'rating' => 'required|integer|min:1|max:5',
            'image_1' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'image_2' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'image_3' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);

        // Store images
        $imagePaths = [];
        foreach (['image_1', 'image_2', 'image_3'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $imagePaths[$imageField] = $request->file($imageField)->store('public/' . $validated['project_name']);
            }
        }

        // Create the project record in the database
        $project = Project::create([
            'project_name' => $validated['project_name'],
            'type' => $validated['type'],
            'title_1' => $validated['title_1'],
            'title_2' => $validated['title_2'],
            'paragraph_1' => $validated['paragraph_1'],
            'paragraph_2' => $validated['paragraph_2'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'category' => $validated['category'],
            'customer_name' => $validated['customer_name'],
            'advantages' => json_encode($validated['advantages']), // store as JSON string
            'project_summary' => $validated['project_summary'],
            'rating' => $validated['rating'],
            'image_1' => $imagePaths['image_1'] ?? null,
            'image_2' => $imagePaths['image_2'] ?? null,
            'image_3' => $imagePaths['image_3'] ?? null,
        ]);

        return redirect()->route('admin.project')->with('success', 'Project created successfully!');
    }
}
