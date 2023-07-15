<?php

namespace App\Http\Controllers;

use App\Models\School\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function checkResult(){
        return view('mark.show');
    }

    public function show(Request $request){
        dd($request);
        return view('mark.show');
    }

    public function create(){
        return view('mark.create');
    }

    public function store(Request $request){
        $grades = $request->input('grades');
        foreach ($grades as $key => $grade) {
            $grade = new Mark();
            $grade->grade = $grade;
        }

        return response()->json($grade);
    }


}
