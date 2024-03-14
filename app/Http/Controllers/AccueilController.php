<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
   public function index (){
    $courses=Course::all();
    return view('index', compact('courses'));
   }
}
