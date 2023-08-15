<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreparentsRequest;
use Illuminate\Http\Request;
use App\Models\School\Parents;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateparentsRequest;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('parents.index', [
            'parents' => Parents::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()) {
            return view('parents.create');
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreparentsRequest $request)
    {
        if (auth()->user()) {
            $parents = new Parents();
            $parents->name          =  $request->name;
            $parents->email         =  $request->email;
            $parents->password      =  bcrypt($request->password);
            $parents->telephone     =  $request->telephone;
            $parents->gender        =  $request->gender;
            $parents->address       =  $request->address;
            if ($request->hasFile('image')) {

                $image = $request->file('image');
                $imageName = time().'.'.$image->extension();
                $image->storeAs('public/images/parents', $imageName);
                $parents->image = $imageName;

            }
            $parents->save();

            return redirect(route('student.login'));
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('parents.show', [
            'parent' => Parents::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (auth()->user()) {
            return view('parents.edit', [
                'parent' => Parents::findOrFail($id)
            ]);
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateparentsRequest $request, string $id)
    {
        if (auth()->user()) {
            $parents = Parents::findOrFail($id);
            $parents->name = $request->name;
            $parents->email = $request->email;
            $parents->password = bcrypt($request->password);
            $parents->telephone = $request->telephone;
            $parents->gender = $request->gender;
            $parents->address = $request->address;
             if ($request->hasFile('image')) {
                // Delete the previous image if it exists
                if ($parents->image) {
                    Storage::delete('public/images/parents/' . $parents->image);
                }
                 $image = $request->file('image');
                $imageName = time().'.'.$image->extension();
                $image->storeAs('public/images/parents', $imageName);
                $parents->image = $imageName;
            }
             $parents->update();
             // You can add any additional logic or redirect here if needed
            return redirect()->back()->with('success', 'Parents updated successfully!');

        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (auth()->user()) {
            // Delete the associated image if it exists
            $parents = Parents::findOrFail($id);
            if ($parents->image) {
                Storage::delete('public/images/parents/' . $parents->image);
            }
            $parents->delete();
            // You can add any additional logic or redirect here if needed
            return redirect()->route('parents.index')->with('success', 'Parents deleted successfully!');

        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }
}
