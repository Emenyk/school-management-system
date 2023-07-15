<?php

namespace App\Http\Controllers;

use App\Models\School\Attend;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function create(){
        return view('Attendance.create');
    }

    public function store(Request $request){
        
        $marks = $request->input('marks');
        foreach ($marks as $key => $mark) {
            $attendance = new Attend();
            $attendance->mark = $mark;
        }

        return response()->json($attendance);
    }
}
