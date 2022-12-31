<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use \Image;

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

        $image = $request->file('image');
        $imgName = hexdec(uniqid()).'.'.strtolower($image->getClientOriginalExtension());
        // Image::make($image)->resize(770, 450)->save('images/blog/'.$imgName);
        $imgUp = 'images/blog/';
        $imageReq = $imgUp.$imgName;
        $image->move($imgUp, $imgName);

        Blog::insert([
            'title'=>$request->title,
            'sort_desc'=>$request->sort_desc,
            'long_desc'=>$request->long_desc,
            'image'=> $imageReq,
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
        $image = $request->file('image');

        if($image){
            $old_image = $request->old_image;
            unlink($old_image);
            $image_id = hexdec(uniqid());
            $image_ext = strtolower($image->getClientOriginalExtension());
            $image_name = $image_id.'.'.$image_ext;
            $image_path = 'images/blog/';
            $image_req = $image_path.$image_name;
            $image->move($image_path,$image_name);
         

            Blog::find($id)->update([
                'title'=>$request->title,
                'sort_desc'=>$request->sort_desc,
                'long_desc'=>$request->long_desc,
                'image'=>$image_req,
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
