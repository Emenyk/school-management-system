<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use App\Models\School\Attend;
use App\Models\School\Classroom;
use App\Models\School\Student;
use App\Models\School\Subject;
use App\Models\School\Teacher;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $allStudents = Student::all()->count();
        $allTeachers = Teacher::all()->count();
        $allSubjects = Subject::all()->count();
        $todaysAttendance = Attend::whereDate('created_at', today())->count();
        $todaysAttendance > 0 ? $attendancePercentage = ($todaysAttendance / $allStudents) * 100 : $attendancePercentage = 0;
        if (auth()->check()) {
            # code...
            return view('dashboard', [
                'todaysAttendance' => $todaysAttendance,
                'attendancePercentage' => floor($attendancePercentage),
                'allStudents' => $allStudents,
                'allTeachers' => $allTeachers,
                'allSubjects' => $allSubjects,
                'classrooms' => Classroom::paginate(5),
                'memos' => Memo::where('user_id', auth()->user()->id)->orderByDesc('created_at')->take(5)->get(),
            ]);
        }
        elseif (auth('student')->check()) {
            # code...
            return view('dashboard', [
                'todaysAttendance' => $todaysAttendance,
                'attendancePercentage' => floor($attendancePercentage),
                'allStudents' => $allStudents,
                'allTeachers' => $allTeachers,
                'allSubjects' => $allSubjects,
                'classrooms' => Classroom::paginate(5),
                'memos' => Memo::where('student_id', auth('student')->user()->id)->orderByDesc('created_at')->take(5)->get(),
            ]);
        }
        elseif (auth('parents')->check()) {
            # code...
            return view('dashboard', [
                'todaysAttendance' => $todaysAttendance,
                'attendancePercentage' => floor($attendancePercentage),
                'allStudents' => $allStudents,
                'allTeachers' => $allTeachers,
                'allSubjects' => $allSubjects,
                'classrooms' => Classroom::paginate(5),
                'memos' => Memo::where('parent_id', auth('parents')->user()->id)->orderByDesc('created_at')->take(5)->get(),
            ]);
        }
        elseif (auth('teacher')->check()) {
            # code...
            return view('dashboard', [
                'todaysAttendance' => $todaysAttendance,
                'attendancePercentage' => floor($attendancePercentage),
                'allStudents' => $allStudents,
                'allTeachers' => $allTeachers,
                'allSubjects' => $allSubjects,
                'classrooms' => Classroom::paginate(5),
                'memos' => Memo::where('teacher_id', auth('teacher')->user()->id)->orderByDesc('created_at')->take(5)->get(),
            ]);
        }
        else {
            # code...
            return view('dashboard', [
                'todaysAttendance' => $todaysAttendance,
                'attendancePercentage' => floor($attendancePercentage),
                'allStudents' => $allStudents,
                'allTeachers' => $allTeachers,
                'allSubjects' => $allSubjects,
                'classrooms' => Classroom::paginate(5),

            ]);
        }
    }
}
