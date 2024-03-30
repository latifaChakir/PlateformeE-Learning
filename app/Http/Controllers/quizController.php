<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class quizController extends Controller
{
    public function showQuiz($coursID)
    {
        $course = Course::find($coursID);
        $courses = Course::where('price', 0)->get();
        $questions = QuizQuestion::with('options')
            ->whereHas('quiz', function ($query) use ($coursID) {
                $query->where('cours_id', $coursID);
            })
            ->get();
        // dd($options);

        return view("user.quiz", compact('courses', 'course', 'questions'));
    }
}
