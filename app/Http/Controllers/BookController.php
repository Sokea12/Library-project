<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with(['authers', 'categories', 'publishers'])->get();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            Book::create([
                'name' => $request->name,
                'auther_id' => $request->auther_id,
                'category_id' => $request->category_id,
                'publisher_id' => $request->publisher_id,
            ]);
            return redirect()->route('books.index')->with('success', 'Book created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to create book: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
   {
        $book = Book::findOrFail($id);

        // Get all options for dropdowns
        $categories = Category::all();
        $authors = Author::all();
        $publishers = Publisher::all();

        return view('books.edit', compact('book', 'categories', 'authors', 'publishers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $book = Book::findOrFail($id);

        try {
            $book->update([
                'name' => $request->name,
                'auther_id' => $request->auther_id,
                'category_id' => $request->category_id,
                'publisher_id' => $request->publisher_id,
            ]);
            return redirect()->route('books.index')->with('success', 'Book updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to update book: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        try {
            $book->delete();
            return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to delete book: ' . $e->getMessage()]);
        }
    }
}
