<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function checkResult(){
        return view('mark.show');
    }

    public function create(){
        return view('mark.create');
    }

    public function show(Request $request){
        return view('mark.show');
    }

}
