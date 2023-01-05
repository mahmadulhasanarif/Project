<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Instractor;
use Illuminate\Http\Request;

class TraningController extends Controller
{
    public function index(){
        $instractors = Instractor::all();
        $categories = CourseCategory::all();
        $courses = Course::all();
        return view('traning.frontend.index', compact('categories', 'courses', 'instractors'));
    }

    public function course(){
        $courses = Course::all();
        $categories = CourseCategory::all();
        return view('traning.frontend.course', compact('courses', 'categories'));
    }
    public function courseDetails(){
        return view('traning.frontend.courseDetails');
    }

    public function event(){
        $courses = Course::all();
        $categories = CourseCategory::all();
        return view('traning.frontend.event', compact('courses', 'categories'));
    }
}
