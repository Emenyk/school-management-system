<?php

namespace App\Http\Controllers\SchoolLogins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ParentsLoginController extends Controller
{
    public function create()
    {
        return view('auth.parentsLogin', ['url' => 'parents']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('parents')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    public function logout()
    {
        Auth::guard('parents')->logout();
        return redirect('/parents/login');
    }
}
