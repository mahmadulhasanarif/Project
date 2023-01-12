<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->paginate(5);
        return view('blog.index', compact('blogs'));
    }

    public function create(){
        return view('blog.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'sort_desc'=>'required',
            'long_desc'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg,pdf,svg'
        ]);


        $images = $request->file('image');

        $name = hexdec(uniqid()).'.'.strtolower($images->getClientOriginalExtension());
        Image::make($images)->resize(1200,1200)->save('images/blog/'.$name);
        $reqImage = 'images/blog/'.$name;

        Blog::insert([
            'title'=>$request->title,
            'sort_desc'=>$request->sort_desc,
            'long_desc'=>$request->long_desc,
            'image'=> $reqImage,
            'created_at'=>Carbon::now(),
        ]);

        return redirect()->back()->with('message', 'Data Insert Successfully');
    }

    public function edit(Blog $blog){
        $blog['blogs'] = Blog::all();
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $images = $request->file('image');

        if($images){
            $old_image = $request->old_image;
            unlink($old_image);
            $name = hexdec(uniqid()).'.'.strtolower($images->getClientOriginalExtension());
            Image::make($images)->resize(1200,1200)->save('images/blog/'.$name);
            $reqImage = 'images/blog/'.$name;
         

            Blog::find($id)->update([
                'title'=>$request->title,
                'sort_desc'=>$request->sort_desc,
                'long_desc'=>$request->long_desc,
                'image'=>$reqImage,
                'updated_at'=>Carbon::now()
            ]);
            Session::flash('message', "Blog Updated Successfully");

            return redirect()->route('admin.blog.index');
        }else{
            Blog::find($id)->update([
                'title'=>$request->title,
                'sort_desc'=>$request->sort_desc,
                'long_desc'=>$request->long_desc,
                'updated_at'=>Carbon::now()
            ]);
            Session::flash('message', "Blog Some Updated Successfully");

        return redirect()->route('admin.blog.index');
        } 

    }
    public function delete($id)
    {
        $images = Blog::find($id);
        $old_image = $images->image;
        unlink($old_image);

        Blog::find($id)->delete();
        Session::flash('message', 'Blog Deleted Successfully');
        return redirect()->back();
    }

}
