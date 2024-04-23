<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Quiz;
use App\Models\QuizOption;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuizzController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quiz::join('courses', 'quizzes.cours_id', '=', 'courses.id')
            ->select('quizzes.*', 'courses.title as course_title')
            ->get();
        $courses = Course::where('price', 0)->get();
        return view('dashboard.quiz.quiz', compact('courses', 'quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::where('price', 0)->get();
        return view('dashboard.quiz.addquiz', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'course' => 'required|exists:courses,id',
            'title' => 'required|string',
            'qst_numbers' => 'required|integer',
            'mark_right' => 'required|integer',
            'mark_wrong' => 'required|integer',
            'limited_time' => 'required|integer',
        ]);

        $quiz = new Quiz();
        $quiz->cours_id = $validatedData['course'];
        $quiz->title = $validatedData['title'];
        $quiz->qst_numbers = $validatedData['qst_numbers'];
        $quiz->mark_right = $validatedData['mark_right'];
        $quiz->mark_wrong = $validatedData['mark_wrong'];
        $quiz->limited_time = $validatedData['limited_time'];
        $quiz->save();

        return redirect()->route('quizzes.questions.create', ['quiz' => $quiz->id]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::where('price', 0)->get();
        $quiz = Quiz::find($id);
        return view('dashboard.quiz.editquiz', compact('quiz', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'course' => 'required|exists:courses,id',
            'title' => 'required|string',
            'qst_numbers' => 'required|integer',
            'mark_right' => 'required|integer',
            'mark_wrong' => 'required|integer',
            'limited_time' => 'required|integer',
        ]);


        $quiz = Quiz::findOrFail($id);
        $quiz->cours_id = $validatedData['course'];
        $quiz->title = $validatedData['title'];
        $quiz->qst_numbers = $validatedData['qst_numbers'];
        $quiz->mark_right = $validatedData['mark_right'];
        $quiz->mark_wrong = $validatedData['mark_wrong'];
        $quiz->limited_time = $validatedData['limited_time'];
        $quiz->save();

        return redirect()->route('quizzes.questions.create', ['quiz' => $quiz->id]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $quiz = Quiz::find($id);
        $quiz->delete();
        return redirect('/quizzes');
    }

    public function cratequestions($quizID)
    {
        $quiz = Quiz::find($quizID);
        $quiz_id = $quiz->id;
        $qst_numbers = $quiz->qst_numbers;
        return view('dashboard.quiz.addquestions', compact('qst_numbers', 'quiz_id'));
    }

    public function add(Request $request)
    {
        // Validation des données
        $validatedData = $this->validate($request, [
            'quiz_id' => 'required',
            'questions' => 'required|array',
            'questions.*' => 'required|string|max:255',
            'options' => 'required|array',
            'options.*' => 'required|array|size:4',
            'options.*.*' => 'required|string|max:255',
            'correct_answers' => 'required|array',
            'correct_answers.*' => 'required|in:a,b,c,d',
        ]);

        $existingQuestions = QuizQuestion::where('quiz_id', $validatedData['quiz_id'])->get();

        foreach ($existingQuestions as $question) {
            $question->options()->delete(); // Supprimer les options associées à cette question
            $question->delete(); // Supprimer la question
        }

        // Ajouter les nouvelles questions
        foreach ($validatedData['questions'] as $index => $questionText) {
            $question = new QuizQuestion();
            $question->quiz_id = $validatedData['quiz_id'];
            $question->text_question = $questionText;
            $question->save();

            $questionId = $question->id;

            if (isset($validatedData['options'][$index])) {
                $questionOptions = $validatedData['options'][$index];
                $questionCorrectAnswer = $validatedData['correct_answers'][$index];

                foreach ($questionOptions as $optionKey => $optionText) {
                    if (in_array($optionKey, ['a', 'b', 'c', 'd'])) {
                        $trueOption = $questionCorrectAnswer === $optionKey ? 1 : 0;

                        $quizOption = new QuizOption();
                        $quizOption->quiz_qst = $questionId;
                        $quizOption->option_text = $optionText;
                        $quizOption->true_option = $trueOption;
                        $quizOption->save();
                    }
                }
            } else {
                logger()->warning('No options provided for question: ' . $questionText);
            }
        }

        return redirect()->route('quizzes.index')->with('success', 'Questions added successfully!');
    }












}
