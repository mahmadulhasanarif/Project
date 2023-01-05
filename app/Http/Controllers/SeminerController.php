<?php

namespace App\Http\Controllers;

use App\Models\Seminer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeminerController extends Controller
{
    public function index(){
        $seminers = Seminer::latest()->paginate(5);
        return view('traning.backend.seminer.index', compact('seminers'));
    }

    public function store(Request $request){
        $request->validate([
            'course_id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'number'=>'required',
            'address'=>'required'
        ]);
        
        Seminer::insert([
            'course_id'=>$request->course_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'number'=>$request->number,
            'created_at'=>Carbon::now()
        ]);

        return redirect()->back()->with('message', 'Successfully Resgister for seminer');
    }

    public function delete($id){
        Seminer::find($id)->delete();
        return redirect()->back()->with('message', 'Delete Successfully seminer');
    }
}
