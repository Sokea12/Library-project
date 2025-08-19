<?php

namespace App\Http\Controllers;

use App\Models\BookIssue;
use App\Models\Book;
use App\Models\Student;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class BookIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book_issues = BookIssue::with(['book', 'student'])->get();
        return view('book_issues.index', compact('book_issues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student_issues = Student::all();
        $book_issues = Book::all();
        return view('book_issues.create', compact('student_issues', 'book_issues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            BookIssue::create([
                'student_id' => $request->student_id,
                'book_id' => $request->book_id
            ]);
            return redirect()->route('book_issues.index')->with('success', 'Book issues create successfully!');
        } catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Failed to create book issues: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(BookIssue $bookIssue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book_select = BookIssue::findOrFail($id);
        $student_issues = Student::all();
        $book_issues = Book::all();
        return view('book_issues.edit', compact('student_issues', 'book_issues', 'book_select'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $BookIssue = BookIssue::findOrFail($id);
        $BookIssue->update([
            'student_id' => $request->student_id,
            'book_id' => $request->book_id
        ]);
        return redirect()->route('book_issues.index')->with('Success', 'Book issues update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       try {
            $book_issue = BookIssue::findOrFail($id);
            $book_issue->delete();
            return redirect()->route('book_issues.index')->with('success', 'Book issue deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to delete book issue: ' . $e->getMessage()]);
        }
    }
}
