<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\School\Teacher;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreteacherRequest;
use App\Http\Requests\UpdateteacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('teacher.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreteacherRequest $request)
    {
        $image = $request->file('image');
        $imageName = now().$image.$image->extension();
        $image->move(public_path('images/teachers'), $imageName);

        // Create a new user instance using the validated data
        $teacher = Teacher::create([
            'uniqueID' => Str::random(10),
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'DOB' => $request->DOB,
            'gender' => $request->gender,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'image' => $imageName,
            'subject_id' => $request->subject_id,
        ]);

        // Redirect the user to a success page
        return redirect()->route('dashboard')->with('success', 'teacher created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(teacher $teacher)
    {
        return view('teacher.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teacher $teacher)
    {
        return view('teacher.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateteacherRequest $request, teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teacher $teacher)
    {
        //
    }
}
