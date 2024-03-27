<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
   public function index (){
    $courses=Course::where('price', 0)->get();
    $categories=Category::all();
    $coursePayment = Course::whereNotNull('price')
    ->where('price', '<>', 0)
    ->get();
    return view('index', compact('courses','coursePayment','categories'));
   }
}
