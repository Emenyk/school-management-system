<?php

namespace App\Http\Controllers;

use App\Models\School\Attend;
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
        $attendancePercentage = ($todaysAttendance / $allStudents) * 100;
        return view('dashboard', [
            'todaysAttendance' => $todaysAttendance,
            'attendancePercentage' => $attendancePercentage,
            'allStudents' => $allStudents,
            'allTeachers' => $allTeachers,
            'allSubjects' => $allSubjects
        ]);
    }
}
