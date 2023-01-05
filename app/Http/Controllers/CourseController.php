<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(5);
        return view('traning.backend.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CourseCategory::all();
        return view('traning.backend.course.create', compact('categories'));
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
            'cat_id'=>'required',
            'name'=>'required',
            'title'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);

        $image = $request->file('image');

        $name = hexdec(uniqid()).'.'.strtolower($image->getClientOriginalExtension());
        Image::make($image)->resize(307,200)->save('images/course/'.$name);
        $reqImage = 'images/course/'.$name;

        Course::insert([
            'cat_id'=>$request->cat_id,
            'user_id'=>Auth::user()->id,
            'name'=>$request->name,
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$reqImage,
            'created_at'=>Carbon::now()
        ]);

        return redirect()->route('course.index')->with('message', 'Course Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('traning.backend.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = CourseCategory::all();
        $course = Course::find($id);
        return view('traning.backend.course.edit', compact('course', 'categories'));
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
        $image = $request->file('image');

        if($image){
            $name = hexdec(uniqid()).'.'.strtolower($image->getClientOriginalExtension());
            Image::make($image)->resize(360,240)->save('images/course/'.$name);
            $reqImage = 'images/course/'.$name;
        

            Course::find($id)->update([
                'cat_id'=>$request->cat_id,
                'user_id'=>Auth::user()->id,
                'name'=>$request->name,
                'title'=>$request->title,
                'description'=>$request->description,
                'price'=>$request->price,
                'image'=>$reqImage,
                'updated_at'=>Carbon::now(),
            ]);
            $old_image = $request->old_image;
            unlink($old_image);
            return redirect()->route('course.index')->with('message', 'Course Updated Successfully');
        }else{
            Course::find($id)->update([
                'cat_id'=>$request->cat_id,
                'user_id'=>Auth::user()->id,
                'name'=>$request->name,
                'title'=>$request->title,
                'description'=>$request->description,
                'price'=>$request->price,
                'updated_at'=>Carbon::now(),
            ]);
            return redirect()->route('course.index')->with('message', 'Course some Updated Successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $images = Course::find($id);
        $old = $images->image;
        unlink($old);
        Course::find($id)->delete();
        return redirect()->back()->with('message', 'Course Deleted Successfully');
    }
}
