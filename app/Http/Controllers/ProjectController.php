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
        foreach (['image_1', 'image_2', 'image_3'] as $key => $imageField) {
            if ($request->hasFile($imageField)) {
                $fileName = "image" . ($key + 1) . '.' . $request->file($imageField)->getClientOriginalExtension();
                $filePath = $request->file($imageField)->move(public_path('images/' . $validated['project_name']), $fileName);
                $imagePaths[$imageField] = 'images/' . $validated['project_name'] . '/' . $fileName;
            }
        }

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
        return response()->json("success");

        return redirect()->route('admin.project')->with('success', 'Project created successfully!');
    }


    public function update(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'id' => 'required|exists:projects,id',
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

        // Fetch the project to update
        $project = Project::findOrFail($validated['id']);

        // Initialize an array to store new image paths
        $imagePaths = [];
        foreach (['image_1', 'image_2', 'image_3'] as $key => $imageField) {
            if ($request->hasFile($imageField)) {
                // Generate new image name and store it
                $fileName = "image" . ($key + 1) . '.' . $request->file($imageField)->getClientOriginalExtension();
                $filePath = $request->file($imageField)->move(public_path('images/' . $validated['project_name']), $fileName);
                $imagePaths[$imageField] = 'images/' . $validated['project_name'] . '/' . $fileName;

                // Delete old image if it exists
                if ($project->$imageField) {
                    $oldImagePath = public_path($project->$imageField);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }
        }

        // Update the project details
        $project->update([
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
            'advantages' => json_encode($validated['advantages']),
            'project_summary' => $validated['project_summary'],
            'rating' => $validated['rating'],
            'image_1' => $imagePaths['image_1'] ?? $project->image_1,
            'image_2' => $imagePaths['image_2'] ?? $project->image_2,
            'image_3' => $imagePaths['image_3'] ?? $project->image_3,
        ]);

        // Return success message
        return response()->json('success', 'Project updated successfully!');
    }




    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        foreach (['image_1', 'image_2', 'image_3'] as $imageField) {
            if ($project->$imageField) {
                $imagePath = public_path('storage/' . str_replace('public/', '', $project->$imageField));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
        }

        $project->delete();

        return response()->json('success', 'Project deleted successfully!');
    }
    public function show($id)
    {
        $project = Project::findOrFail($id);

        $advantage = json_decode($project->advantages, true); // Decode the string to an array

        // Now, decode the second layer (array inside the first array)
        $advantage = json_decode($advantage[0], true);
        // Return the list of characters as a response
        // return response()->json($advantage);

        // return response()->json($);
        return view('project-details', compact('project', 'advantage'));
    }
    public function showProject()
    {
        // Paginate the results, e.g., 10 items per page
        $projects = Project::paginate(10);

        return view('projects', compact('projects'));
    }
}
