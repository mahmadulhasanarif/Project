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

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function update(Request $request)
    {
        Option::where('id', $request->up_id)->update([
            'question_id' => $request->up_question_id,
            'option_text' => $request->up_option_text,
            'points' => $request->up_points,
            'updated_at' => Carbon::now(),
        ]);

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function delete(Request $request)
    {
        Option::find($request->option_id)->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }

    public function paginate()
    {
        $options = Option::latest()->paginate(5);
        return view('quiz.option.paginate', compact('options'));
    }
}
