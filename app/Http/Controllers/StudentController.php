<?php

namespace App\Http\Controllers;

use App\Models\School\Student;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use App\Models\School\Classroom;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('classroom')->select('id', 'name', 'gender', 'image', 'DOB', DB::raw('TIMESTAMPDIFF(YEAR, DOB, CURDATE()) AS age'))->get();
        return view('student.index', [
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()) {
            $classrooms = Classroom::all();
            return view('student.create', [
                'classrooms' => $classrooms
            ]);
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestudentRequest $request)
    {
        if (auth()->user()) {
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
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $classrooms = Classroom::all();
        return view('student.show', [
            'student' => $student,
            'classrooms' => $classrooms
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        if (auth()->user()) {
            return view('student.edit', [
                'student' => $student
            ]);
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentRequest $request, Student $student)
    {
        if (auth()->user()) {
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

        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        if (auth()->user()) {
            // Delete the associated image if it exists
            if ($student->image) {
                Storage::delete('public/images/students/' . $student->image);
            }
            $student->delete();
            // You can add any additional logic or redirect here if needed
            return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }

    }
}


