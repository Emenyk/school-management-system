<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('news.index', [
            'allNews' => News::orderByDesc('created_at')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->title = $request->title;
        $news->body = trim(strip_tags($request->body));
        if (auth()->user()) {
            try {
                $adminID = auth()->user()->id;
                $news->user_id = $adminID;
                if ($request->hasFile('attachment')) {
                    $attachment = $request->file('attachment');
                    $attachmentName = time().'.'.$attachment->extension();
                    $attachment->storeAs('public/news', $attachmentName);
                    $news->attachment = $attachmentName;
                }$news->save();

            } catch (\Exception $e) {
                // Handle the exception and push back to the page with an error message
                return redirect()->back()->with('error', 'Failed to publish the news. Please try again.');
            }

        }elseif (auth('teacher')->user()) {

            try {
                $teacherID = auth('teacher')->user()->id;
                $news->teacher_id = $teacherID;
                if ($request->hasFile('attachment')) {
                    $attachment = $request->file('attachment');
                    $attachmentName = time().'.'.$attachment->extension();
                    $attachment->storeAs('public/news', $attachmentName);
                    $news->attachment = $attachmentName;
                }$news->save();

            } catch (\Exception $e) {
                // Handle the exception and push back to the page with an error message
                return redirect()->back()->with('error', 'Failed to publish the news. please try again.');
            }

        }elseif (auth('student')) {

            try {
                $studentID = auth('student')->user()->id;
                $news->student_id = $studentID;
                 if ($request->hasFile('attachment')) {
                    $attachment = $request->file('attachment');
                    $attachmentName = time().'.'.$attachment->extension();
                    $attachment->storeAs('public/news', $attachmentName);
                    $news->attachment = $attachmentName;
                }$news->save();

            } catch (\Exception $e) {
                // Handle the exception and push back to the page with an error message
                return redirect()->back()->with('error', 'Failed to publish the news. Please try again.');
            }

        }
        return redirect()->route('news.index')->with('success', 'news published successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
