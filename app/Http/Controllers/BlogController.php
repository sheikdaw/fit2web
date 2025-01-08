<?php


namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Store a new blog
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'blog_name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'title_1' => 'required|string|max:255',
            'title_2' => 'required|string|max:255',
            'paragraph_1' => 'required|string',
            'paragraph_2' => 'required|string',
            'paragraph_3' => 'nullable|string',
            'date' => 'required|date',
            'category' => 'required|string|max:255',
            'customer_name' => 'required|string|max:255',
            'advantages' => 'required|array',
            'created_by' => 'nullable|string|max:255',
            'testimonial_phara' => 'nullable|string',
            'testimonial_name' => 'nullable|string',
            'testimonial_by' => 'nullable|string',
            'tags' => 'nullable|string',
            'project_summary' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'ordered_by' => 'nullable|string',
            'image_1' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'image_2' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'image_3' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'image_4' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);

        // Store images
        $imagePaths = [];
        foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $key => $imageField) {
            if ($request->hasFile($imageField)) {
                $fileName = "image" . ($key + 1) . '.' . $request->file($imageField)->getClientOriginalExtension();
                $filePath = $request->file($imageField)->move(public_path('Blogs/' . $validated['blog_name']), $fileName);
                $imagePaths[$imageField] = 'Blogs/' . $validated['blog_name'] . '/' . $fileName;
            }
        }

        // Create blog
        $blog = Blog::create([
            'blog_name' => $validated['blog_name'],
            'type' => $validated['type'],
            'title_1' => $validated['title_1'],
            'title_2' => $validated['title_2'],
            'paragraph_1' => $validated['paragraph_1'],
            'paragraph_2' => $validated['paragraph_2'],
            'paragraph_3' => $validated['paragraph_3'],
            'date' => $validated['date'],
            'category' => $validated['category'],
            'customer_name' => $validated['customer_name'],
            'advantages' => json_encode($validated['advantages']),
            'created_by' => $validated['created_by'],
            'testimonial_phara' => $validated['testimonial_phara'],
            'testimonial_name' => $validated['testimonial_name'],
            'testimonial_by' => $validated['testimonial_by'],
            'tags' => $validated['tags'],
            'project_summary' => $validated['project_summary'],
            'rating' => $validated['rating'],
            'ordered_by' => $validated['ordered_by'],
            'image_1' => $imagePaths['image_1'] ?? null,
            'image_2' => $imagePaths['image_2'] ?? null,
            'image_3' => $imagePaths['image_3'] ?? null,
            'image_4' => $imagePaths['image_4'] ?? null,
        ]);

        return response()->json(['message' => 'Blog created successfully']);
    }

    // Update an existing blog
    public function update(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'id' => 'required|exists:blogs,id',
            'blog_name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'title_1' => 'required|string|max:255',
            'title_2' => 'required|string|max:255',
            'paragraph_1' => 'required|string',
            'paragraph_2' => 'required|string',
            'paragraph_3' => 'nullable|string',
            'date' => 'required|date',
            'category' => 'required|string|max:255',
            'customer_name' => 'required|string|max:255',
            'advantages' => 'required|array',
            'created_by' => 'nullable|string|max:255',
            'testimonial_phara' => 'nullable|string',
            'testimonial_name' => 'nullable|string',
            'testimonial_by' => 'nullable|string',
            'tags' => 'nullable|string',
            'project_summary' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'ordered_by' => 'nullable|string',
            'image_1' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'image_2' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'image_3' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'image_4' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);

        // Find blog to update
        $blog = Blog::findOrFail($validated['id']);

        // Initialize an array to store new image paths
        $imagePaths = [];
        foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $key => $imageField) {
            if ($request->hasFile($imageField)) {
                // Generate new image name and store it
                $fileName = "image" . ($key + 1) . '.' . $request->file($imageField)->getClientOriginalExtension();
                $filePath = $request->file($imageField)->move(public_path('Blogs/' . $validated['blog_name']), $fileName);
                $imagePaths[$imageField] = 'Blogs/' . $validated['blog_name'] . '/' . $fileName;

                // Delete old image if it exists
                if ($blog->$imageField) {
                    $oldImagePath = public_path($blog->$imageField);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }
        }

        // Update the blog details
        $blog->update([
            'blog_name' => $validated['blog_name'],
            'type' => $validated['type'],
            'title_1' => $validated['title_1'],
            'title_2' => $validated['title_2'],
            'paragraph_1' => $validated['paragraph_1'],
            'paragraph_2' => $validated['paragraph_2'],
            'paragraph_3' => $validated['paragraph_3'],
            'date' => $validated['date'],
            'category' => $validated['category'],
            'customer_name' => $validated['customer_name'],
            'advantages' => json_encode($validated['advantages']),
            'created_by' => $validated['created_by'],
            'testimonial_phara' => $validated['testimonial_phara'],
            'testimonial_name' => $validated['testimonial_name'],
            'testimonial_by' => $validated['testimonial_by'],
            'tags' => $validated['tags'],
            'project_summary' => $validated['project_summary'],
            'rating' => $validated['rating'],
            'ordered_by' => $validated['ordered_by'],
            'image_1' => $imagePaths['image_1'] ?? $blog->image_1,
            'image_2' => $imagePaths['image_2'] ?? $blog->image_2,
            'image_3' => $imagePaths['image_3'] ?? $blog->image_3,
            'image_4' => $imagePaths['image_4'] ?? $blog->image_4,
        ]);

        return response()->json(['message' => 'Blog updated successfully']);
    }

    // Delete a blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete images
        foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $imageField) {
            if ($blog->$imageField) {
                $imagePath = public_path($blog->$imageField); // Correct path for public images
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
        }

        // Delete the blog
        $blog->delete();

        return response()->json(['message' => 'Blog deleted successfully']);
    }
}
