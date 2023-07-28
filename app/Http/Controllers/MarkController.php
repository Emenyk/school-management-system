<?php

namespace App\Http\Controllers;

use App\Models\School\Classroom;
use App\Models\School\Mark;
use Illuminate\Support\Str;
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
        $classrooms = Classroom::all();
        return view('mark.create', [
            'classrooms' => $classrooms
        ]);
    }

    public function recordMark(Request $request)
    {
        $classroomId = $request->class;
        $classroom = Classroom::find($classroomId);
        if($classroom) {
            $students = $classroom->students;
            $subjects = $classroom->subjects;
            return view('mark.create', [
                'students' => $students,
                'subjects' => $subjects,
            ]);
        }
        return redirect()->back()->with('error', 'Invalid classroom selected.');
    }

    public function store(Request $request){
        $assignment = $request->input('assignment');
        $test = $request->input('test');
        $exam = $request->input('exam');
        $students = $request->input('students');

        foreach ($students as $index => $student) {
            $studentMark = new Mark();
            $studentMark->session = $request->session;
            $studentMark->type = $request->type;
            $studentMark->student_id = $student;
            $studentMark->subject_id = $request->subject;
            $studentMark->assignment = $assignment[$index];
            $studentMark->test = $test[$index];
            $studentMark->exam = $exam[$index];
            $studentMark->save();
        }

        return redirect()->route('input.mark')->with('success', 'Mark added successfully!');;
    }


}
