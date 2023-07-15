<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\School\Student;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
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
        $student->uniqueID = Str::random(10);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = bcrypt($request->password);
        $student->DOB = $request->DOB;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->telephone = $request->telephone;
        $student->classroom = $request->classroom;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images/students', $imageName);
            $student->image = $imageName;
        }
        $student->save();

        return response()->json([$student]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
