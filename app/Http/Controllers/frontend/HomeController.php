<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'support'=>'required',
            'message'=>'required'
        ]);

        Contact::insert([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'support'=>$request->support,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->back()->with('message', 'Contact Submited Successfully');
    }

    public function software(){
        return view('frontend.services.software');
    }

    public function it(){
        return view('frontend.services.it');
    }

    public function serviceDetails(){
        return view('frontend.services.serviceDetails');
    }

    public function about(){
        return view('frontend.about');
    }


    public function blog(){
        $blogs = Blog::latest()->paginate(5);
        return view('frontend.blogs.blog', compact('blogs'));
    }


    public function blogDetails($id){
        $blog= Blog::find($id);
        $blogs = Blog::latest()->paginate(5);
        return view('frontend.blogs.singleBlog', compact('blog', 'blogs'));
    }
}
