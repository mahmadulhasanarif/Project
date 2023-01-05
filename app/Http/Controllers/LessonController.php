<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LessonController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::latest()->paginate(5);
        return view('traning.backend.lesson.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('traning.backend.lesson.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_id'=>'required',
            'title'=>'required',
            'description'=>'required',
            'video_url'=>'required'
        ]);

        Lesson::insert([
            'course_id'=>$request->course_id,
            'title'=>$request->title,
            'description'=>$request->description,
            'video_url'=>$request->video_url,
            'created_at'=>Carbon::now()
        ]);

        return redirect()->route('lesson.index')->with('message', 'lesson Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::find($id);
        return view('traning.backend.lesson.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::all();
        $lesson = Lesson::find($id);
        return view('traning.backend.lesson.edit', compact('courses', 'lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Lesson::find($id)->update([
            'course_id'=>$request->course_id,
            'title'=>$request->title,
            'description'=>$request->description,
            'video_url'=>$request->video_url,
            'updated_at'=>Carbon::now(),
        ]);
        return redirect()->route('lesson.index')->with('message', 'Lesson Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Lesson::find($id)->delete();
        return redirect()->back()->with('message', 'Lesson Deleted Successfully');
    }
}
