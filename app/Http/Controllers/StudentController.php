<?php

namespace App\Http\Controllers;

use App\Models\School\Student;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestudentRequest $request)
    {

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = bcrypt($request->password);
        $student->DOB = $request->DOB;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->telephone = $request->telephone;
        $student->classroom_id = $request->classroom_id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images/students', $imageName);
            $student->image = $imageName;
        }
        $student->save();

        return redirect()->route('student.login')->with('success', 'Student saved successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentRequest $request, Student $student)
    {
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = bcrypt($request->password);
        $student->DOB = $request->DOB;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->telephone = $request->telephone;
        $student->classroom_id = $request->classroom_id;
         if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($student->image) {
                Storage::delete('public/images/students/' . $student->image);
            }
             $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images/students', $imageName);
            $student->image = $imageName;

        }$student->update();

        return redirect()->back()->with('success', 'Student updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        // Delete the associated image if it exists
        if ($student->image) {
            Storage::delete('public/images/students/' . $student->image);
        }
        $student->delete();
        // You can add any additional logic or redirect here if needed
        return redirect()->back()->with('success', 'Student deleted successfully!');

    }
}


