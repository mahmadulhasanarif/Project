<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CourseCategory::latest()->paginate(5);
        return view('traning.backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('traning.backend.category.create');
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
            'name'=>'required|unique:course_categories',
            'image'=>'required'
        ]);

        $images = $request->file('image');

        $name = hexdec(uniqid()).'.'.strtolower($images->getClientOriginalExtension());
        Image::make($images)->resize(480,360)->save('images/category/'.$name);
        $reqImage = 'images/category/'.$name;

        CourseCategory::insert([
            'name'=>$request->name,
            'image'=>$reqImage,
            'created_at'=>Carbon::now()
        ]);

        return redirect()->route('course.category.index')->with('message', 'Category Created Successfully');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CourseCategory::find($id);
        return view('traning.backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $images = $request->file('image');

        if($images){
            $old_image = $request->old_image;
            unlink($old_image);
            $name = hexdec(uniqid()).'.'.strtolower($images->getClientOriginalExtension());
            Image::make($images)->resize(360,240)->save('images/category/'.$name);
            $reqImage = 'images/category/'.$name;
        

            CourseCategory::find($id)->update([
                'name'=>$request->name,
                'image'=>$reqImage,
                'updated_at'=>Carbon::now(),
            ]);
            return redirect()->route('course.category.index')->with('message', 'Category Updated Successfully');
        }else{
            CourseCategory::find($id)->update([
                'name'=>$request->name,
                'updated_at'=>Carbon::now(),
            ]);
            return redirect()->route('course.category.index')->with('message', 'Category name Updated Successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $images = CourseCategory::find($id);
        $old_image = $images->image;
        unlink($old_image);
        CourseCategory::find($id)->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }
}
