<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'latestNews' => News::latest()->take(5)->get()
        ]);
    }
}



