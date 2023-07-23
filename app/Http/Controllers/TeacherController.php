<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\School\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreteacherRequest;
use App\Http\Requests\UpdateteacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher.index', [
            'teachers' => $teachers
        ]);
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
        $teacher->save();

        // Redirect the user to a success page
        return redirect()->back()->with('success', 'Teacher updated successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(teacher $teacher)
    {
        return view('teacher.show', [
            'teacher' => $teacher
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teacher $teacher)
    {
        return view('teacher.edit', [
            'teacher' => $teacher
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateteacherRequest $request, teacher $teacher)
    {
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = bcrypt($request->password);
        $teacher->DOB = $request->DOB;
        $teacher->gender = $request->gender;
        $teacher->address = $request->address;
        $teacher->telephone = $request->telephone;
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($teacher->image) {
                Storage::delete('public/images/teachers/' . $teacher->image);
            }
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images/teachers', $imageName);
            $teacher->image = $imageName;
        }
        $teacher->update();
        // You can add any additional logic or redirect here if needed
        return redirect()->back()->with('success', 'Teacher updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teacher $teacher)
    {
        // Delete the associated image if it exists
        if ($teacher->image) {
            Storage::delete('public/images/teachers/' . $teacher->image);
        }
        $teacher->delete();
        // You can add any additional logic or redirect here if needed
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully!');
    }

}

