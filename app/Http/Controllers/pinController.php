<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\AcademicYear;
use App\Models\Pin;
use Illuminate\Http\Request;

class pinController extends Controller
{
    public function generateResultCode()
    {
        $currentAcademicYear = AcademicYear::lastest()->first();
        for ($counts=50; $counts < 50; $counts++) {
            $code = Str::random();
            $code = strtoupper($code);
            $pin = new Pin();
            $pin->code = $pin;
            $pin->academic_year_id = $currentAcademicYear;
            $pin->save();
        }

        $pins = Pin::where('academic_year_id', $currentAcademicYear->id)->get();
        dd($pin);
    }


}
