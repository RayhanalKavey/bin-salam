<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('user')->get();
        return Inertia::render('ProjectsPage', ['projects' => $projects]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return inertia('Project/Create');
        // return Inertia::render('Project/Create');
        return Inertia::render('Project/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'value' => 'nullable|string|max:255',
            'monitoring_body' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'value' => $request->value,
            'monitoring_body' => $request->monitoring_body,
            'image' => $imagePath,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('dashboard.page');

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
