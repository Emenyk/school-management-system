<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class MemoController extends Controller
{
    public function index(){
        if (auth()->user() || auth('teacher')->user() || auth('student')->user() || auth('parents')->user()) {
            return view('memo.index', [
                'memos' => Memo::all()
            ]);
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    public function create(){
        if (auth()->user() || auth('teacher')->user() || auth('student')->user() || auth('parents')->user()) {
            return view('memo.create');
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    public function store(Request $request){
        if (auth()->user() || auth('teacher')->user() || auth('student')->user() || auth('parents')->user()) {
            if ($request->input(['admin', 'parent', 'student', 'teacher'])) {
                $admin = $request->admin;
                $admin = 1;
                try {
                    $memo = new Memo();
                    $memo->subject = $request->subject;
                    $memo->body = trim(strip_tags($request->body));
                    $memo->admin_id = $admin;
                    $memo->student_id = $request->student;
                    $memo->teacher_id = $request->teacher;
                    $memo->parent_id = $request->parent;
                    if ($request->hasFile('attachment')) {
                        $attachment = $request->file('attachment');
                        $attachmentName = time().'.'.$attachment->extension();
                        $attachment->storeAs('public/memos', $attachmentName);
                        $memo->attachment = $attachmentName;
                    }$memo->save();

                } catch (\Exception $e) {
                    // Handle the exception and push back to the page with an error message
                    return redirect()->back()->with('error', 'Failed to send the message. Please check who you are sending to.');
                }
            }else {
                if ($request->input('admin')) {
                    try {
                        $adminID = $request->admin;
                        $adminID = 1;
                        $memo = new Memo();
                        $memo->subject = $request->subject;
                        $memo->body = trim(strip_tags($request->body));
                        $memo->user_id = $adminID;
                         if ($request->hasFile('attachment')) {
                            $attachment = $request->file('attachment');
                            $attachmentName = time().'.'.$attachment->extension();
                            $attachment->storeAs('public/memos', $attachmentName);
                            $memo->attachment = $attachmentName;
                        }
                         $memo->save();
                         // Success logic goes here
                     } catch (\Exception $e) {
                        // Handle the exception and push back to the page with an error message
                        return redirect()->back()->with('error', 'Failed to send the message. Please check who you are sending to.');
                    }

                }elseif ($request->input('parent')) {

                    try {
                        $memo = new Memo();
                        $memo->subject = $request->subject;
                        $memo->body = trim(strip_tags($request->body));
                        $memo->parent_id = $request->parent;
                         if ($request->hasFile('attachment')) {
                            $attachment = $request->file('attachment');
                            $attachmentName = time().'.'.$attachment->extension();
                            $attachment->storeAs('public/memos', $attachmentName);
                            $memo->attachment = $attachmentName;
                        }
                         $memo->save();
                         // Success logic goes here
                    } catch (\Exception $e) {
                        // Handle the exception and push back to the page with an error message
                        return redirect()->back()->with('error', 'Failed to send the message. Please check who you are sending to.');
                    }

                }elseif ($request->input('teacher')) {

                    try {
                        $memo = new Memo();
                        $memo->subject = $request->subject;
                        $memo->body = trim(strip_tags($request->body));
                        $memo->teacher_id = $request->teacher;
                         if ($request->hasFile('attachment')) {
                            $attachment = $request->file('attachment');
                            $attachmentName = time().'.'.$attachment->extension();
                            $attachment->storeAs('public/memos', $attachmentName);
                            $memo->attachment = $attachmentName;
                        }
                         $memo->save();
                        // Success logic goes here
                    } catch (\Exception $e) {
                        // Handle the exception and push back to the page with an error message
                        return redirect()->back()->with('error', 'Failed to send the message. Please check who you are sending to.');
                    }

                }elseif ($request->input('student')) {

                    try {
                        $memo = new Memo();
                        $memo->subject = $request->subject;
                        $memo->body = trim(strip_tags($request->body));
                        $memo->student_id = $request->student;
                         if ($request->hasFile('attachment')) {
                            $attachment = $request->file('attachment');
                            $attachmentName = time().'.'.$attachment->extension();
                            $attachment->storeAs('public/memos', $attachmentName);
                            $memo->attachment = $attachmentName;
                        }
                         $memo->save();
                        // Success logic goes here
                    } catch (\Exception $e) {
                        // Handle the exception and push back to the page with an error message
                        return redirect()->back()->with('error', 'Failed to save the memo to the database. Please try again.');
                    }

                }
            }

            return redirect()->back()->with('success', 'message sent successfully!');
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

    public function show(Memo $memo){
        if (auth()->user() || auth('teacher')->user() || auth('student')->user() || auth('parents')->user()) {
            return view('memo.show', [
                'memo' => $memo
            ]);
        } else {
            return redirect()->back()->with('error', 'sorry! you are not permitted to perform this action');
        }
    }

}
