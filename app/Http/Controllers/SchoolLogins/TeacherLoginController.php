<?php

namespace App\Http\Controllers\SchoolLogins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeacherLoginController extends Controller
{
    public function create()
    {
        return view('auth.teacherLogin', ['url' => 'teachers']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    public function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect('/teachers/login');
    }
}
