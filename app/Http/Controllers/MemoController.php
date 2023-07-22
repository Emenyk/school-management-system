<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class MemoController extends Controller
{
    public function index(){
        return view('memo.index');
    }

    public function create(){
        return view('memo.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'reciever' => 'required|integer',
            'subject' => 'required|string',
            'body' => 'required|string',

        ]);

        $memo = new Memo();
        $memo->subject = $validateData['subject'];
        $memo->body = $validateData['body'];
        $memo->reciever = $validateData['reciever'];
        if ($request->hasFile('attachment')) {

            $attachment = $request->file('attachment');
            $attachmentName = time().'.'.$attachment->extension();
            $attachment->storeAs('public/memos', $attachmentName);
            $memo->attachment = $attachmentName;
        }
        $memo->save();

        return redirect()->back()->with('success', 'Teacher updated successfully!');
    }

    public function show(Memo $memo){
        return view('memo.show', [
            'memo' => $memo
        ]);
    }
    
}
