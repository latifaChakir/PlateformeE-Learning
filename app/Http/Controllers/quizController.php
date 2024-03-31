<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\UserResponse;
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


        return view("user.quiz", compact('courses', 'course', 'questions'));
    }

    public function storeResponses(Request $request)
    {
        $answers = $request->input('answers');
        $decodedUser = $request->decoded_user;
        $userId = $decodedUser->id;

        foreach ($answers as $questionId => $optionId) {
            $response = new UserResponse();
            $response->question_id = $questionId;
            $response->option_id = $optionId;
            $response->user_id = $userId;
            $response->save();
        }
        // dd($questionId);
        $quizQst = QuizQuestion::find($questionId);
        $quiz = $quizQst->quiz_id;
        $coursequiz = Quiz::find($quiz);
        $courseId = $coursequiz->cours_id;
        return redirect()->route('showResult', ['courseId' => $courseId])->with('courseId', $courseId);
    }

    public function showResults(Request $request, $coursID)
    {
        $decodedUser = $request->decoded_user;
        $userId = $decodedUser->id;
        $questions = QuizQuestion::with('options')
            ->whereHas('quiz', function ($query) use ($coursID) {
                $query->where('cours_id', $coursID);
            })
            ->get();
        $quiz = Quiz::where('cours_id', $coursID)->first();

        $userAnswers = UserResponse::where('user_id', $userId)->get();
        $totalCorrectAnswers = 0;

        foreach ($questions as $question) {
            $userAnswer = $userAnswers->where('question_id', $question->id)->pluck('option_id')->toArray();
            $correctOptions = $question->options->where('true_option', 1)->pluck('id')->toArray();

            sort($userAnswer);
            sort($correctOptions);

            if ($userAnswer === $correctOptions) {
                $totalCorrectAnswers++;
            }
        }
        $score = ($totalCorrectAnswers * $quiz->mark_right) - ($quiz->mark_wrong);

        return view("user.result", compact('questions', 'totalCorrectAnswers', 'score'));
    }

}
