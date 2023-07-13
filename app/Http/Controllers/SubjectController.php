<?php

namespace App\Http\Controllers;

use App\Models\school\subject;
use App\Http\Requests\StoresubjectRequest;
use App\Http\Requests\UpdatesubjectRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Subject.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresubjectRequest $request)
    {
        $image = $request->file('image');
        $imageName = now().$image.$image->extension();
        $image->move(public_path('images/subjects'), $imageName);

        $subject = Subject::create([
            'name' => $request->name,
            'code' => $request->code,
            'image' => $imageName,
            'description' => $request->description,
        ]);

        return response()->json($subject);

    }

    /**
     * Display the specified resource.
     */
    public function show(subject $subject)
    {
        return view('Subject.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subject $subject)
    {
        return view('Subject.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesubjectRequest $request, subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subject $subject)
    {
        //
    }
}
