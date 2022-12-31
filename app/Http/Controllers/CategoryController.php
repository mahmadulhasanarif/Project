<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->paginate(2);
        return view('quiz.category.index', compact('categories'));
    }

    public function create(){
        return view('quiz.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ],
        [
            'name.required'=>'Please Enter a category Name'
        ]);

        Category::insert([
            'name'=>$request->name,
            'created_at'=>Carbon::now()
        ]);
        

        return redirect()->route('quiz_category')->with('message', 'Category Added Successfully');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('quiz.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        Category::find($id)->update([
            'name'=>$request->name,
            'updated_at'=>Carbon::now(),
        ]);

        return redirect()->route('quiz_category')->with('message', 'Category Updated Successfully');
    }

    public function delete($id){
        Category::find($id)->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

}
