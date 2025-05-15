<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Inertia\Inertia;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return Inertia::render('Category/CategoriesPage', ['categories' => $categories]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Category/CategoryCreateForm');

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
            ]);
            Category::create([
                'name' => $request->name,
                'description' => $request->description,
            ]);
            $data = ['message' => 'Category created successfully', 'status' => true, 'error' => ''];
            return redirect()->route('categories.index')->with($data);
        } catch (Exception $e) {
            $data = ['message' => $e->getMessage(), 'status' => false, 'error' => ''];
            return redirect()->route('categories.index')->with($data);
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $category = Category::find($request->id);
        return Inertia::render('Category/CategoryEditForm', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);
            $category = Category::findOrFail($id);
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();

            // Category::create([
            //     'name' => $request->name,
            //     'description' => $request->description,
            // ]);
            $data = ['message' => 'Category updated successfully', 'status' => true, 'error' => ''];
            return redirect()->route('categories.index')->with($data);
        } catch (Exception $e) {
            $data = ['message' => $e->getMessage(), 'status' => false, 'error' => ''];
            return redirect()->route('categories.index')->with($data);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $id)
    {
        $id->delete();
        // return response()->json([
        //     'status' => true,
        //     'message' => 'category created successfully',
        //     'category' => $category,
        // ]);

        return redirect()->route('categories.index')->with('message', 'Category deleted successfully.');
    }
}
