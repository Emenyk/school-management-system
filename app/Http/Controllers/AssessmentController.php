<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function checkResult(){
        return view('assessments.show');
    }
    public function studentAttendance(){
        return view('assessments.attendance');
    }

    public function inputMark(){
        return view('assessments.create');
    }

}
