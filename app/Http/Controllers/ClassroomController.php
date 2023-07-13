<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\school\classroom;
use App\Http\Requests\StoreclassroomRequest;
use App\Http\Requests\UpdateclassroomRequest;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('classroom.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('classroom.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreclassroomRequest $request)
    {
        $image = $request->file('image');
        $imageName = now().$image.$image->extension();
        $image->move(public_path('images/classrooms'), $imageName);

        $classroom = Classroom::create([
            'uniqueID' => Str::random(10),
            'name' => $request->name,
            'classTeacher' => $request->classTeacher,
            'status' => $request->status,
            'image' => $imageName
        ]);

        return response()->json([
            'essage' => 'Classroom created successfully',
            'classroom' => $classroom
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(classroom $classroom)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(classroom $classroom)
    {
        return view('classroom.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateclassroomRequest $request, classroom $classroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(classroom $classroom)
    {
        //
    }
}
