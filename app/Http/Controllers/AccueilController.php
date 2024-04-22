<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Message;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
   public function index (Request $request){
    $courses=Course::where('price', 0)
        ->paginate(4);
    $categories = Category::all();
    $coursePayment = Course::whereNotNull('price')
    ->where('price', '<>', 0)
    ->limit(3)
    ->get();
    $messages=Message::where('is_published', 'approved')->get();


    // dd($messages);

    return view('index', compact('courses','coursePayment','categories','messages'));
   }

   public function search(Request $request)
   {
       $searchTerm = $request->input('search');
       $courses = Course::where('price', 0)
              ->where('title', 'like', "%{$searchTerm}%")
              ->get();
       return view('search', compact('courses'));
   }


}
