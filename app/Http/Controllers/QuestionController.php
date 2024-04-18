<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\Progression;
use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function showExercices()
    {
        $courses = Course::where('price', 0)->get();
        return view('user.exercice', compact('courses'));
    }

    public function search(Request $request)
   {
       $searchTerm = $request->input('search');
       $courses = Course::where('price', 0)
              ->where('title', 'like', "%{$searchTerm}%")
              ->get();
       return view('searchexercice', compact('courses'));
   }

    public function startExo(request $request, $idcours)
    {
        $decodedUser = $request->decoded_user;
        $userId = $decodedUser->id;
        $course = Course::findOrFail($idcours);
        $chapters = $course->chapters()->get();
        $exercices = Questions::with('chapter')->get();
        $courses = Course::where('price', 0)->get();
        $user_answers=Answer::where('user_id',$userId)->get();

        // dd($user_answers);
        return view('user.startExo', compact('course', 'chapters', 'courses', 'exercices','user_answers'));

    }

    public function contentExo($exerId)
    {

        $exercice = Questions::with('chapter')->findOrFail($exerId);
        $answer = $exercice->answer;
        $chapters = $exercice->chapter;
        // $user_answers=Answer::where('user_id',$userId)->get();
        return view('user.contentExo', compact('exercice', 'chapters'));

    }

    public function showAnswer($exerciceid)
    {
        $exercise = Questions::findOrFail($exerciceid);
        $answer = $exercise->answer;
        return response()->json(['answer' => $answer]);
    }


    public function submitAnswer(Request $request)
    {
        $decodedUser = $request->decoded_user;
        $userId = $decodedUser->id;

        $request->validate([
            'answer' => 'required',
            'id' => 'required',
            'course_id' => 'required'
        ]);

        $question = Questions::findOrFail($request->id);
        $answer = new Answer();
        $answer->answer_text = $request->answer;
        $answer->question_id = $request->id;
        $answer->user_id = $userId;
        $answer->save();

        $isCorrect = ($request->answer == $question->answer);
        $answer->is_correct = $isCorrect;
        $answer->save();

        $message = $isCorrect ? 'Vous avez répondu correctement.' : 'Vous n\'avez pas répondu correctement.';

        return redirect('startExo/' . $request->course_id)->with('message', $message);
    }



    public function submitAnswerCoursPayant(Request $request)
    {
        $decodedUser = $request->decoded_user;
        $userId = $decodedUser->id;

        $request->validate([
            'answer' => 'required',
            'id' => 'required',
            'course_id' => 'required',
            'chapter_id' => 'required'

        ]);

        $question = Questions::findorFail($request->id);
        $answer = new Answer();
        $answer->answer_text = $request->answer;
        $answer->question_id = $request->id;
        $answer->user_id=$userId;
        $answer->save();

        if ($request->answer == $question->answer) {
            $answer->is_correct = true;
            $answer->save();
            $progression=new Progression();
            $progression->user_id=$userId;
            $progression->chapter_id=$request->chapter_id;
            $progression->status='termine';
            $progression->save();
        }

        return redirect('/content/' . $request->course_id . '/' . $request->chapter_id);

    }

}
