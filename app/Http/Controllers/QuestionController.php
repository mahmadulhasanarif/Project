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

    public function create()
    {
        $categories = Category::all();
        return view('quiz.question.create', compact('categories'));
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

        return redirect()->route('quiz_question')->with('message', 'Question Insert Successfully');
    }

    
    public function edit($id)
    {
        $question = Question::find($id);
        $categories = Category::all();
        return view('quiz.question.edit', compact('categories', 'question'));
    }

    public function update(Request $request, $id)
    {
        Question::find($id)->update([
            'category_id' => $request->category_id,
            'question_text' => $request->question_text,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('quiz_question')->with('message', 'Question Updated Successfully');
    }

    public function delete($id)
    {
        Question::find($id)->delete();
        return redirect()->back()->with('message', 'Question Deleted Successfully');
    }
}