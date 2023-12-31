<?php

namespace App\Http\Controllers;

use App\Models\School\Library;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreLibraryRequest;
use App\Http\Requests\UpdateLibraryRequest;
use App\Models\School\Classroom;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('library.index', [
            'libraries' => Library::orderByDesc('id')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()) {
            return view('library.create', [
                'classrooms' => Classroom::all()
            ]);
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibraryRequest $request)
    {
        if (auth()->user()) {
            $asset = new Library();
            $asset->asset = $request->asset;
            $asset->author = $request->author;
            $asset->year = $request->year;
            $asset->classroom = $request->classroom;
            $asset->status = $request->status;
            $asset->type = $request->type;
            $asset->price = $request->price;
            if ($request->hasFile('file')) {

                $file = $request->file('file');
                $fileName = time().'.'.$file->extension();
                $file->storeAs('public/libraries', $fileName);
                $asset->file = $fileName;

            }
            $asset->save();

            return redirect()->route('libraries.index')->with('success', 'Library asset stored successfully!');
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(library $library)
    {
        return view('library.show', [
            'library' => $library
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(library $library)
    {
        if (auth()->user()) {
            return view('library.edit', [
                'library' => $library,
                'classrooms' => Classroom::all()
            ]);
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibraryRequest $request, library $library)
    {
        if (auth()->user()) {
            $library->asset = $request->asset;
            $library->author = $request->author;
            $library->year = $request->year;
            $library->classroom = $request->classroom;
            $library->status = $request->status;
            $library->type = $request->type;
            $library->price = $request->price;
            if ($request->hasFile('file')) {
                // Delete the previous file if it exists
                if ($library->file) {
                    Storage::delete('public/images/libraries/' . $library->file);
                }
                $file = $request->file('file');
                $fileName = time().'.'.$file->extension();
                $file->storeAs('public/libraries', $fileName);
                $library->file = $fileName;
            }
             $library->update();
             // You can add any additional logic or redirect here if needed
            return redirect()->back()->with('success', 'Library asset updated successfully!');
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(library $library)
    {
        if (auth()->user()) {

            if ($library->file) {
                Storage::delete('public/libraries/' . $library->file);
            }
            $library->delete();
            return redirect()->back()->with('success', 'Library asset deleted successfully!');

        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

}
