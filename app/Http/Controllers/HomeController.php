<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ($id){
        $course=Course::findOrFail($id);
        $chapters = $course->chapters()->get();
        $courses=Course::where('price', 0)->get();
        return view('courses.index', compact('courses','chapters','course'));
    }
}
