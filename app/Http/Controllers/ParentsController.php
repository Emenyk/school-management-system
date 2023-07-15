<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\School\Parents;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreparentsRequest;
use App\Http\Requests\UpdateparentsRequest;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('parents.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreparentsRequest $request)
    {
        
        $parents = new Parents();
        $parents->uniqueID      =  Str::random(10);
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Parents $parents)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parents $parents)
    {
        return view('parents.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateparentsRequest $request, Parents $parents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parents $parents)
    {
        //
    }
}
