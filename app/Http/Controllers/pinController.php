<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\AcademicYear;
use App\Models\Pin;
use App\Models\School\Mark;
use App\Models\School\Student;
use Illuminate\Http\Request;

class PinController extends Controller
{
    public function index(){
        // $currentAcademicYear = AcademicYear::latest()->first();
        return view('admin.pin.index', [
            'pins' => Pin::orderByDesc('id')->paginate(10)
        ]);
    }

    public function generateResultPin()
    {
        $currentAcademicYear = AcademicYear::latest()->first();
        for ($counts=1; $counts < 50; $counts++) {
            $code = Str::random();
            $code = strtoupper($code);
            $pin = new Pin();
            $pin->code = $code;
            $pin->academic_year_id = $currentAcademicYear->id;
            $pin->save();
        }
        return redirect()->route('pin.index')->with('success', 'The pin has been generated successfully');
    }


    public function evaluatePin(Request $request)
    {
        $code = $request->pin;
        $id = $request->Id;
        if (Pin::where('code', $code)->exists()) {
            $academicYearId = Pin::where('code', $code)->pluck('academic_year_id');
            if (Student::where('id', $id)->exists()) {
                $marks = Mark::where('student_id', $id)->where('academic_year_id', $academicYearId)->get();
                $student = Student::find($id);
                return view('mark.show', [
                    'marks' => $marks,
                    'student' => $student
                ]);
            }else {
                return redirect()->back()->with('error', 'The student Id does not exist, please check the Id you entered');
            }
        }else {
            return redirect()->back()->with('error', 'this pin doest not exist, please chheck if your entry is correct!');
        }


    }

    public function destroyResultPin(Pin $pin)
    {
        $pin->delete();
        return redirect()->back()->with('success', 'the pin has been deleted successfully!');
    }

}
