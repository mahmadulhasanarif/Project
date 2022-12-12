<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $questions = Question::latest()->paginate(5);
        return view('quiz.question.index', compact('questions', 'categories'));
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'category_id' => 'required',
                'question_text'=>'required'
            ],
            [
                'category_id.required' => 'Please Enter a category Name',
                'question_text.required' => 'Please Enter Question',
            ]
        );

        Question::insert([
            'category_id' => $request->category_id,
            'question_text'=>$request->question_text,
            'created_at' => Carbon::now()
        ]);

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function update(Request $request)
    {
        Question::where('id', $request->up_id)->update([
            'category_id' => $request->up_category_id,
            'question_text' => $request->up_question_text,
            'updated_at' => Carbon::now(),
        ]);

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function delete(Request $request)
    {
        Question::find($request->question_id)->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }

    public function paginate()
    {
        $questions = Question::latest()->paginate(5);
        return view('quiz.question.paginate', compact('questions'));
    }
}