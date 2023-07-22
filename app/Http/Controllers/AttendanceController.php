<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\School\Attend;
use App\Models\School\Classroom;

class AttendanceController extends Controller
{
    public function getStudents(Request $request){

        $classroomId = $request->classroom;
        $classroom = Classroom::find($classroomId);
         if ($classroom) {
            $students = $classroom->students;
            $subjects = $classroom->subjects;
            return view('Attendance.show', [
                'students' => $students,
                'subjects' => $subjects
            ]);
        }
        return redirect()->back()->with('error', 'Invalid classroom selected.');
    }

    public function create(){
        $classrooms = Classroom::all();
        return view('Attendance.create', [
            'classrooms' => $classrooms
        ]);
    }

    public function store(Request $request){
        $marks = $request->marks;
        foreach ($marks as $key => $mark) {
            $attendance = new Attend();
            $attendance->subject = $request->subject;
            $attendance->student_id = $mark;
            $attendance->save();
        }

        return redirect()->route('student.attend')->with('success', 'attendance saved successfully!');
    }
}
