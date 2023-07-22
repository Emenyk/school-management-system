<?php

namespace App\Http\Controllers;

use App\Models\school\subject;
use Illuminate\Support\Facades\Storage;
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

        $subject = new Subject();
        $subject->name = $request->name;
        $subject->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images/subjects', $imageName);
            $subject->image = $imageName;
        }
        $subject->save();

        return redirect()->back()->with('success', 'Subject saved successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(subject $subject)
    {
        return view('Subject.show', [
            'subject' => $subject
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subject $subject)
    {
        return view('Subject.edit', [
            'subject' => $subject
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesubjectRequest $request, subject $subject)
    {
        $subject->name = $request->name;
        $subject->description = $request->description;
         if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($subject->image) {
                Storage::delete('public/images/subjects/' . $subject->image);
            }
             $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images/subjects', $imageName);
            $subject->image = $imageName;

        }$subject->update();
         // You can add any additional logic or redirect here if needed
        return redirect()->back()->with('success', 'Subject updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subject $subject)
    {
        // Delete the associated image if it exists
        if ($subject->image) {
            Storage::delete('public/images/subjects/' . $subject->image);
        }
        $subject->delete();
        // You can add any additional logic or redirect here if needed
        return redirect()->back()->with('success', 'Subject deleted successfully!');

    }
}




