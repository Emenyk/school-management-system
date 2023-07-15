<?php

namespace App\Http\Controllers;

use App\Models\School\Library;
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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(library $library)
    {
        return view('library.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibraryRequest $request, library $library)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(library $library)
    {
        //
    }
}
