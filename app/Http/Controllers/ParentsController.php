<?php

namespace App\Http\Controllers;

use App\Models\school\parents;
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
        $validatedData = $request->validated();

        $parents = parents::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function show(parents $parents)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(parents $parents)
    {
        return view('parents.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateparentsRequest $request, parents $parents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(parents $parents)
    {
        //
    }
}
