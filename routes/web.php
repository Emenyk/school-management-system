<?php

use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\MemoController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// ->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->group(function () {
    Route::resource('students', StudentController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('classrooms', ClassroomController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('parents', ParentsController::class);
    Route::resource('libraries', LibraryController::class);
    Route::get('memo', [MemoController::class, 'index'] )->name('memo.index');
    Route::get('memo/create', [MemoController::class, 'create'] )->name('memo.create');
    Route::post('memo/store', [MemoController::class, 'store'] )->name('memo.store');
    Route::get('memo/show', [MemoController::class, 'show'] )->name('memo.show');
});



Route::view('dashboard/event', 'event.index')->name('event.index');
Route::get('dashboard/inputMark', [MarkController::class, 'create'])->name('input.mark');
Route::get('dashboard/checkResult', [MarkController::class, 'checkResult'])->name('result.check');
Route::post('dashboard/checkResult', [MarkController::class, 'show'])->name('result.show');
Route::get('dashboard/studentAttendance', [AttendanceController::class, 'create'])->name('student.attend');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
