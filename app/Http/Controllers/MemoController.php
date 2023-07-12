<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function index(){
        return view('memo.index');
    }

    public function create(){
        return view('memo.create');
    }

    public function store(Request $request){
        dd($request);
    }

    public function show(){
        return view('memo.show');
    }


}
