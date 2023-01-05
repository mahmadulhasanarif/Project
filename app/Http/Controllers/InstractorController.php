<?php

namespace App\Http\Controllers;

use App\Models\Instractor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class InstractorController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instractors = Instractor::latest()->paginate(5);
        return view('traning.backend.instractor.index', compact('instractors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('traning.backend.instractor.create');
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
            'name'=>'required',
            'subject'=>'required',
            'image'=>'required'
        ]);

        $images = $request->file('image');

        $name = hexdec(uniqid()).'.'.strtolower($images->getClientOriginalExtension());
        Image::make($images)->resize(150,150)->save('images/instractor/'.$name);
        $reqImage = 'images/instractor/'.$name;

        Instractor::insert([
            'name'=>$request->name,
            'subject'=>$request->subject,
            'image'=>$reqImage,
            'created_at'=>Carbon::now()
        ]);

        return redirect()->route('instractor.index')->with('message', 'Instractor Created Successfully');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseCategory  $courseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instractor = Instractor::find($id);
        return view('traning.backend.instractor.edit', compact('instractor'));
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
            
            $name = hexdec(uniqid()).'.'.strtolower($images->getClientOriginalExtension());
            Image::make($images)->resize(150,150)->save('images/instractor/'.$name);
            $reqImage = 'images/instractor/'.$name;
        

            Instractor::find($id)->update([
                'name'=>$request->name,
                'subject'=>$request->subject,
                'image'=>$reqImage,
                'updated_at'=>Carbon::now(),
            ]);
            $old_image = $request->old_image;
            unlink($old_image);
            return redirect()->route('instractor.index')->with('message', 'instractor Updated Successfully');
        }else{
            Instractor::find($id)->update([
                'name'=>$request->name,
                'subject'=>$request->subject,
                'updated_at'=>Carbon::now(),
            ]);
            return redirect()->route('instractor.index')->with('message', 'instractor some Updated Successfully');

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
        $images = Instractor::find($id);
        $old_image = $images->image;
        unlink($old_image);
        Instractor::find($id)->delete();
        return redirect()->back()->with('message', 'instractor Deleted Successfully');
    }
}
