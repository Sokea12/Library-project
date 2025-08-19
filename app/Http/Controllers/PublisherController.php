<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publisher::all();
        return view('publishers.index', compact('publishers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publishers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);
        $publisher = Publisher::create($ValidatedData);

        $publisher->save();
        return redirect()->route('publishers.index')->with('success', 'Publisher created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $publishers = Publisher::findOrFail($id); // Auto-404 if not found
        return view('publishers.edit', compact('publishers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $publisher = Publisher::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        $publisher->update($validatedData);

        return redirect()->route('publishers.index')->with('success', 'Publisher updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        try {
           $publisher->delete();
            return redirect()->route('publishers.index')->with('success', 'Publisher deleted successfully.');
        } catch (\Exception $e) {
            // Log the error (optional)
            // \Log::error('Error deleting publisher: '.$e->getMessage());

            return redirect()->back()
                ->with('error', 'Error deleting publisher. Please try again.');
        }

    }
}
