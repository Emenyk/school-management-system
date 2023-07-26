<?php

use App\Http\Controllers\AttachController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\ParentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('lock','admin.index')->name('lock');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
// ->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->group(function () {
    
    Route::resource('students', StudentController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('classrooms', ClassroomController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('parents', ParentController::class);
    Route::resource('libraries', LibraryController::class);

    Route::get('memo', [MemoController::class, 'index'] )->name('memo.index');
    Route::get('memo/create', [MemoController::class, 'create'] )->name('memo.create');
    Route::post('memo/store', [MemoController::class, 'store'] )->name('memo.store');
    Route::get('memo/show', [MemoController::class, 'show'] )->name('memo.show');
    Route::view('event', 'event.index')->name('event.index');
    Route::get('inputMark', [MarkController::class, 'create'])->name('input.mark');
    Route::post('inputMark', [MarkController::class, 'store'])->name('input.mark');
    Route::post('recordAssessment', [MarkController::class, 'recordMark'])->name('record.mark');
    Route::get('checkResult', [MarkController::class, 'checkResult'])->name('result.check');
    Route::post('checkResult', [MarkController::class, 'show'])->name('result.show');
    Route::get('studentAttendance', [AttendanceController::class, 'create'])->name('student.attend');
    Route::post('attendanceStore', [AttendanceController::class, 'store'])->name('attendance.store');
    Route::post('markAttendance', [AttendanceController::class, 'getStudents'])->name('Mark.attendance');
    Route::get('assign/class', [AttachController::class, 'index'])->name('student.class');
    Route::post('assign/class', [AttachController::class, 'attachToIndex'])->name('studentToClass');
    Route::get('assign/subject', [AttachController::class, 'forClassroom'])->name('class.subject');
    Route::post('assign/subject', [AttachController::class, 'attachToClassroom'])->name('classToSubject');
    Route::get('assign/student', [AttachController::class, 'forStudent'])->name('student.subject');
    Route::post('assign/student', [AttachController::class, 'attachToStudent'])->name('studentToSubject');
    Route::get('assign/teacher', [AttachController::class, 'forTeacher'])->name('teacher.subject');
    Route::post('assign/teacher', [AttachController::class, 'attachToTeacher'])->name('teacherToSubject');
    Route::get('assign/parent', [AttachController::class, 'forParent'])->name('parent.student');
    Route::post('assign/parent', [AttachController::class, 'attachToParent'])->name('parentToStudent');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
