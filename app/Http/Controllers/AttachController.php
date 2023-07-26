<?php

namespace App\Http\Controllers;

use App\Models\School\Classroom;
use App\Models\School\Parents;
use App\Models\School\Student;
use App\Models\School\Subject;
use App\Models\School\Teacher;
use Illuminate\Http\Request;

class AttachController extends Controller
{
    public function index()
    {
        return view('Attach.student-class', [
            'classrooms' => Classroom::all(),
            'students' => Student::all(),
        ]);
    }
    public function attachToIndex(Request $request)
    {
        $attachs = $request->attachs;
        $classroomId = $request->classroom;
        $classroom = Classroom::findOrFail($classroomId);
        foreach ($attachs as $key => $attach) {
            $student = Student::find($attach);
            $student->classroom()->associate($student->id);
            $student->save();
        }

        return redirect()->route('classrooms.index')->with('success', 'student/students has been assigned classroom successfully!');

    }


    public function forClassroom()
    {
        return view('Attach.subject-class', [
            'classrooms' => Classroom::all(),
            'subjects' => Subject::all(),
        ]);
    }
    public function attachToClassroom(Request $request)
    {
        $attachs = $request->attachs;
        $classroomId = $request->classroom;
        $classroom = Classroom::findOrFail($classroomId);
        foreach ($attachs as $key => $attach) {
            $subject = Subject::find($attach);
            $subject->classroom()->associate($classroom);
        }

        return redirect()->route('subjects.index')->with('success', 'subject/subjects has been assigned classroom successfully!');
    }


    public function forTeacher()
    {
        return view('Attach.subject-teacher', [
            'teachers' => Teacher::all(),
            'subjects' => Subject::all()
        ]);
    }
    public function attachToTeacher(Request $request)
    {
        $attachs = $request->attachs;
        $teacherId = $request->teacher;
        $teacher = Teacher::findOrFail($teacherId);
        foreach ($attachs as $key => $attach) {
            $subject = Subject::find($attach);
            $subject->teacher()->associate($teacher);
            $subject->save();
        }

        return redirect()->route('subjects.index')->with('success', 'subject/subjects has been assigned to teacher successfully!');

    }


    public function forParent()
    {
        return view('Attach.student-parent', [
            'parents' => Parents::all(),
            'students' => Student::all()
        ]);
    }
    public function attachToParent(Request $request)
    {
        $attachs = $request->attachs;
        $parentId = $request->parent;
        $parent = Parents::findOrFail($parentId);
        foreach ($attachs as $key => $attach) {
            $parent->students()->attach($attach);
        }

        return redirect()->route('students.index')->with('success', 'student/students has been assigned to parent successfully!');

    }


    public function forStudent()
    {
        return view('Attach.subject-student', [
            'students' => Student::all(),
            'subjects' => Subject::all()
        ]);
    }
    public function attachToStudent(Request $request)
    {
        $attachs = $request->attachs;
        $studentId = $request->student;
        $student = Student::findOrFail($studentId);
        foreach ($attachs as $key => $attach) {
            $student->subjects()->attach($attach);
        }

        return redirect()->route('subjects.index')->with('success', 'subject/subjects has been assigned to Student successfully!');
    }
}
