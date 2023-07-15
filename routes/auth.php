<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\SchoolLogins\ParentsLoginController as SchoolLoginsParentsLoginController;
use App\Http\Controllers\SchoolLogins\StudentLoginController as SchoolLoginsStudentLoginController;
use App\Http\Controllers\SchoolLogins\TeacherLoginController as SchoolLoginsTeacherLoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    // students login/logout
    Route::get('/students/login', [SchoolLoginsStudentLoginController::class, 'create'])->name('student.login');
    Route::post('/students/login', [SchoolLoginsStudentLoginController::class, 'store'])->name('student.loginstore');
    Route::get('/students/logout', [SchoolLoginsStudentLoginController::class, 'logout'])->name('student.logout');

    // teachers login/logout
    Route::get('/teachers/login', [SchoolLoginsTeacherLoginController::class, 'create'])->name('teacher.login');
    Route::post('/teachers/login', [SchoolLoginsTeacherLoginController::class, 'store'])->name('teacher.login');
    Route::get('/teachers/logout', [SchoolLoginsTeacherLoginController::class, 'logout'])->name('teacher.logout');

    // parents login/logout
    Route::get('/parents/login', [SchoolLoginsParentsLoginController::class, 'create'])->name('parents.login');
    Route::post('/parents/login', [SchoolLoginsParentsLoginController::class, 'store'])->name('parents.login');
    Route::get('/parents/logout', [SchoolLoginsParentsLoginController::class, 'logout'])->name('parents.logout');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
