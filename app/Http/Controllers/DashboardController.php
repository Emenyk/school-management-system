<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use App\Models\School\Attend;
use App\Models\School\Classroom;
use App\Models\School\Student;
use App\Models\School\Subject;
use App\Models\School\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $allStudents = Student::all()->count();
        $allTeachers = Teacher::all()->count();
        $allSubjects = Subject::all()->count();
        $todaysAttendance = Attend::whereDate('created_at', today())->count();
        $todaysAttendance > 0 ? $attendancePercentage = ($todaysAttendance / $allStudents) * 100 : $attendancePercentage = 0;
        return view('dashboard', [
            'todaysAttendance' => $todaysAttendance,
            'attendancePercentage' => floor($attendancePercentage),
            'allStudents' => $allStudents,
            'allTeachers' => $allTeachers,
            'allSubjects' => $allSubjects,
            'classrooms' => Classroom::paginate(5),
            'memos' => Memo::orderByDesc('created_at')->take(5)->get(),
        ]);
    }
}
