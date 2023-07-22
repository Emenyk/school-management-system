<?php

namespace App\Http\Controllers;

use App\Models\School\Library;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreLibraryRequest;
use App\Http\Requests\UpdateLibraryRequest;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('library.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('library.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibraryRequest $request)
    {

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
            $file->storeAs('public/images/libraries', $fileName);
            $asset->file = $fileName;

        }
        $asset->save();

        return redirect()->back();

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
        return view('library.edit', [
            'library' => $library
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibraryRequest $request, library $library)
    {
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
            $file->storeAs('public/images/libraries', $fileName);
            $library->file = $fileName;
        }
         $library->update();
         // You can add any additional logic or redirect here if needed
        return redirect()->back()->with('success', 'Library asset updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(library $library)
    {
        // Delete the associated file if it exists
        if ($library->file) {
            Storage::delete('public/images/libraries/' . $library->file);
        }
        $library->delete();
        // You can add any additional logic or redirect here if needed
        return redirect()->back()->with('success', 'Library asset deleted successfully!');
    }

}
