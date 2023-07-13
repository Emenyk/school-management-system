<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function create(){
        return view('Attendance.create');
    }

    public function store(Request $request){
        dd($request);
    }
}
