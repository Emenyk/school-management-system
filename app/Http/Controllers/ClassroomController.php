<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\School\Classroom;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreclassroomRequest;
use App\Http\Requests\UpdateclassroomRequest;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('classroom.index', [
            'classrooms' => Classroom::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()) {
            return view('classroom.create');
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreclassroomRequest $request)
    {

        $classroom = new Classroom();
        $classroom->name = $request->name;
        $classroom->classTeacher = $request->classTeacher;
        $classroom->status = $request->status;
        if($request->hasFile('image')){

            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images/classrooms', $imageName);
            $classroom->image = $imageName;
        }
        $classroom->save();

        return redirect()->back()->with('success', 'Classroom saved successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(classroom $classroom)
    {
        return view('classroom.show', [
            'classroom' => $classroom
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(classroom $classroom)
    {
        if (auth()->user()) {
            return view('classroom.edit', [
                'classroom' => $classroom
            ]);
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateclassroomRequest $request, classroom $classroom)
    {
        $classroom->name = $request->name;
        $classroom->classTeacher = $request->classTeacher;
        $classroom->status = $request->status;
         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->putFileAs('public/images/classrooms', $image, $imageName);
            $classroom->image = $imageName;
        }
         $classroom->update();
        // You can add any additional logic or redirect here if needed
        return redirect()->back()->with('success', 'Classroom updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(classroom $classroom)
    {
        if (auth()->user()) {
            // Delete the associated image file if it exists
            if ($classroom->image) {
                Storage::delete('public/images/classrooms/' . $classroom->image);
            }
            $classroom->delete();
             // You can add any additional logic or redirect here if needed
            return redirect()->route('classrooms.index')->with('success', 'Classroom deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }

    }
}
