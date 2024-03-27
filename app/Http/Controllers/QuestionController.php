<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Course;
use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function showExercices(){
        $courses=Course::where('price', 0)->get();
        return view('user.exercice', compact('courses'));
    }

    public function startExo($idcours){
        $course=Course::findOrFail($idcours);
        $chapters = $course->chapters()->get();
        $exercices = Questions::with('chapter')->get();
        $courses=Course::where('price', 0)->get();
        return view('user.startExo', compact('course', 'chapters','courses','exercices'));

    }

    public function contentExo($exerId){
        $exercice = Questions::with('chapter')->findOrFail($exerId);
        $answer = $exercice->answer;
        $chapters = $exercice->chapter;
        return view('user.contentExo', compact('exercice', 'chapters'));

    }

    public function showAnswer($exerciceid){
        $exercise = Questions::findOrFail($exerciceid);
        $answer = $exercise->answer;
        return response()->json(['answer' => $answer]);
    }


        public function submitAnswer(Request $request)
        {

                $request->validate([
                    'answer' => 'required',
                    'id' => 'required',
                    'course_id' => 'required'
                ]);

                $question = Questions::findorFail($request->id);
                $answer = new Answer();
                $answer->answer_text = $request->answer;
                $answer->question_id = $request->id;
                $answer->save();

                if($request->answer == $question->answer)
                {
                    $answer->is_correct = true;
                    $answer->save();

                }
                return redirect('startExo/'.$request->course_id);

    }


}
