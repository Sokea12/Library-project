<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
 * Store a newly created resource in storage.
 */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255'  // Added string and max validation
        ]);

        try {
            // Create and save the new author (create() saves automatically)
            Author::create($validatedData);

            return redirect()->route('authors.index')
                ->with('success', 'Author created successfully.');

        } catch (\Exception $e) {
            // Log the error (optional)
            // \Log::error('Error creating author: '.$e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Error creating author. Please try again.');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $author = Author::findOrFail($id); // Auto-404 if not found
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    /**
 * Update the specified resource in storage.
 */
    public function update(Request $request, Author $author)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add other fields if your Author model has more attributes
        ]);

        try {
            // Update the author with the validated data
            $author->update($validatedData);

            return redirect()->route('authors.index')
                ->with('success', 'Author updated successfully.');

        } catch (\Exception $e) {
            // Log the error (optional)
            // \Log::error('Error updating author: '.$e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Error updating author. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    /**
 * Remove the specified resource from storage.
 */
    public function destroy(Author $author)
    {
        try {
            // Delete the author
            $author->delete();

            return redirect()->route('authors.index')
                ->with('success', 'Author deleted successfully.');

        } catch (\Exception $e) {
            // Log the error (optional)
            // \Log::error('Error deleting author: '.$e->getMessage());

            return redirect()->route('authors.index')
                ->with('error', 'Error deleting author. Please try again.');
        }
    }
}
