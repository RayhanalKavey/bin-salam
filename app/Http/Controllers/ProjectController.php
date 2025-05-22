<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allProjects()
    {
        return Inertia::render('Project/AllProjects');

    }
    public function index()
    {
        $projects = Project::latest()->get();
        return Inertia::render('Project/ProjectsPage', [
            'projects' => $projects
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return inertia('Project/Create');
        // return Inertia::render('Project/Create');
        $categories = Category::orderBy('name')->get(); // Fetch categories for dropdown
        return Inertia::render('Project/ProjectCreateForm', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'location' => 'nullable|string|max:255',
                'value' => 'nullable|numeric',
                'monitoring_body' => 'nullable|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status' => 'required|in:pending,in_progress,completed',
                'category_id' => 'required|exists:categories,id',
            ]);

            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('projects', 'public');
            }
            $defaultUserId = 1;
            Project::create([
                'name' => $request->name,
                'description' => $request->description,
                'location' => $request->location,
                'value' => $request->value,
                'monitoring_body' => $request->monitoring_body,
                'image' => $imagePath,
                'status' => $request->status,
                'category_id' => $request->category_id,
                'user_id' => $defaultUserId,
            ]);
            $data = ['message' => 'Project created successfully', 'status' => true, 'error' => ''];
            return redirect()->route('project.index')->with($data);
        } catch (Exception $e) {
            $data = ['message' => $e->getMessage(), 'status' => false, 'error' => ''];
            return redirect()->route('project.index')->with($data);

        }



    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
