<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Student::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'class' => $request->input('class'),

            ]);

            return redirect()->route('students.index')->with('success', 'Student created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create student: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $students = Student::findOrFail($id); // Fetch the student by ID
        if (!$students) {
            return redirect()->route('students.index')->with('error', 'Student not found.');
        }

        // Pass the student data to the edit view
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $students = Student::findOrFail($id); // Fetch the student by ID
        if (!$students) {
            return redirect()->route('students.index')->with('error', 'Student not found.');
        }
        try {
            $students->update([
                'name' => $request->input('name'),
                'age' => $request->input('age'),
                'gender' => $request->input('gender'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'class' => $request->input('class'),
            ]);
            return redirect()->route('students.index')->with('success', 'Student updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update student: ' . $e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $student = Student::findOrFail($id);
            $student->delete();
            return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
        } catch (\Exception $e){
        return redirect()->back()->with('error', 'failed to delete student:' . $e->getMessage());
        }

    }
}
