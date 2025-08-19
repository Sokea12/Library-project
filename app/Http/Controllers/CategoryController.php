<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Category::create([ 'name' => $request->name, ]);
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
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
    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $categories = Category::findOrFail($id);
        $categories->update(['name' => request('name')]);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $categories = Category::findOrFail($id);
            $categories->delete();
            return redirect()->route('categories.index')
                ->with('success', 'Author deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('categories.index')
                ->with('error', 'Error deleting author. Please try again.');
        }

    }
}
