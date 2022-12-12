<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Question;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\ResultRequest;

class ResultController extends Controller
{
   
    public function index(): View
    {
        $results = Result::latest()->paginate(5);

        return view('quiz.results.index', compact('results'));
    }

    public function create(): View
    {
        $questions = Question::all()->pluck('question_text', 'id');

        return view('quiz.results.create', compact('questions'));
    }

    public function store(ResultRequest $request): RedirectResponse
    {
        $result = Result::create($request->validated() + ['user_id' => auth()->id()]);
        $result->questions()->sync($request->input('questions', []));

        return redirect()->route('quiz.result.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Result $result): View
    {
        return view('quiz.results.show', compact('result'));
    }

    public function edit(Result $result): View
    {
        $questions = Question::all()->pluck('question_text', 'id');

        return view('quiz.results.edit', compact('result', 'questions'));
    }

    public function update(ResultRequest $request, Result $result): RedirectResponse
    {
        $result->update($request->validated() + ['user_id' => auth()->id()]);
        $result->questions()->sync($request->input('questions', []));

        return redirect()->route('quiz.result.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Result $result): RedirectResponse
    {
        $result->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }

    public function massDestroy()
    {
        Result::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
