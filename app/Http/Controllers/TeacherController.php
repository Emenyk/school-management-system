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
        
        // Create a new user instance using the validated data
        $teacher = new Teacher();
        $teacher->uniqueID = Str::random(10);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = bcrypt($request->password);
        $teacher->DOB = $request->DOB;
        $teacher->gender = $request->gender;
        $teacher->address = $request->address;
        $teacher->telephone = $request->telephone;
        if ($request->hasFile('image')) {
            
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images/teachers', $imageName);
            $teacher->image = $imageName;
        }
        $teacher->subject_id = $request->subject_id;
        $teacher->save();
        
        // Redirect the user to a success page
        return redirect()->back();

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
