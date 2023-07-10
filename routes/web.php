<?php

use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\LibraryController;
use Illuminate\Routing\RouteGroup;

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
});

Route::view('dashboard/mail', 'mailbox.index')->name('mailing.index');
Route::view('dashboard/mail/create', 'mailbox.create')->name('mailing.create');
Route::view('dashboard/mail/show', 'mailbox.show')->name('mailing.show');

Route::view('dashboard/event', 'event.index')->name('event.index');
Route::get('dashboard/checkResult', [AssessmentController::class, 'checkResult'])->name('result.check');
Route::get('dashboard/studentAttendance', [AssessmentController::class, 'studentAttendance'])->name('student.attend');
Route::get('dashboard/inputMark', [AssessmentController::class, 'inputMark'])->name('input.mark');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
