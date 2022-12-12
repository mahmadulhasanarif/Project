<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->paginate(5);
        return view('quiz.category.index', compact('categories'));
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

        return response()->json([
            'status'=>'success'
        ]);
    }

    public function update(Request $request)
    {
        Category::where('id',$request->up_id)->update([
            'name'=>$request->up_name,
            'updated_at'=>Carbon::now(),
        ]);

        return response()->json([
            'status'=>'success'
        ]);
    }

    public function delete(Request $request){
        Category::find($request->category_id)->delete();
        return response()->json([
            'status'=>'success'
        ]);
    }

    public function paginate(){
        $categories = Category::latest()->paginate(5);
        return view('quiz.category.paginate', compact('categories'));
    }
}
