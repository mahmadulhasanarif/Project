<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        $options = Option::latest()->paginate(5);
        return view('quiz.option.index', compact('questions', 'options'));
    }

    public function create(){
        $questions = Question::all();
        return view('quiz.option.create', compact('questions'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'question_id' => 'required',
                'option_text'=>'required',
                'points'=>'required',
            ],
            [
                'question_id.required' => 'Please select question',
                'option_text.required' => 'Please Enter Option',
                'points.required' => 'Please Enter points'
            ]
        );

        Option::insert([
            'question_id' => $request->question_id,
            'option_text'=>$request->option_text,
            'points'=>$request->points,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('quiz_option')->with('message', 'Option Inserted Successfully');
    }

    public function edit($id){
        $option = Option::find($id);
        $questions = Question::all();
        return view('quiz.option.edit', compact('questions', 'option'));
    }

    public function update(Request $request, $id)
    {
        Option::find($id)->update([
            'question_id' => $request->question_id,
            'option_text' => $request->option_text,
            'points' => $request->points,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('quiz_option')->with('message', 'Option Updated Successfully');
    }

    public function delete($id)
    {
        Option::find($id)->delete();
        return redirect()->back()->with('message', 'Option Deleted Successfully');
    }

}
