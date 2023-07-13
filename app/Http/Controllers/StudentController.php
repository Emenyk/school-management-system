<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\School\Student;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;

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
        $image = $request->file('image');
        $imageName = now().$image.$image->extension();
        $image->move(public_path('images/students'), $imageName);

        $student = Student::create([
            'uniqueID' => Str::random(10),
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'DOB' => $request->DOB,
            'gender' => $request->gender,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'classroom' => $request->classroom,
            'image' => $imageName,
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view('student.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        return view('student.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentRequest $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }
}
