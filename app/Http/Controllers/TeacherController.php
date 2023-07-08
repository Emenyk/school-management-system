<?php

namespace App\Http\Controllers;

use App\Models\school\teacher;
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

        $validatedData = $request->validated();
        $teacher = teacher::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect('/login');
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
