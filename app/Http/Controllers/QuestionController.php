<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function showExercices(){
        $courses = Course::all();
        return view('user.exercice', compact('courses'));
    }

    public function startExo($idcours){
        $course=Course::findOrFail($idcours);
        $chapters = $course->chapters()->get();
        $exercices = Questions::with('chapter')->get();
        $courses = Course::all();
        return view('user.startExo', compact('course', 'chapters','courses','exercices'));

    }

    public function contentExo(){
        
    }
}
