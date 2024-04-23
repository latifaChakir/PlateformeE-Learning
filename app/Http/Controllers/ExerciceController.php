<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Questions;
use Illuminate\Http\Request;

class ExerciceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercices = Questions::with('chapter')->get();
        // dd($questions);
        $courses = Course::all();
        return view("dashboard.questions.exercices", compact('courses','exercices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course'=>'required',
            'chapter' => 'required',
            'question' => 'required',
            'answer' => 'required',
            'title' =>'required',
        ]);
        $question = new Questions();
        $question->chapter_id=$request->chapter;
        $question->question_text=$request->question;
        $question->answer=$request->answer;
        $question->title=$request->title;
        $question->save();
        return redirect('/exercice');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $exercice = Questions::where('id', $id)->with('chapter')->first();
        // dd($exercice);
        $courses = Course::all();
        return view('dashboard.questions.editexercice', compact('exercice','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'course'=>'required',
            'chapter' => 'required',
            'question' => 'required',
            'answer' => 'required',
            'title' =>'required',
        ]);
        $question =Questions::find($id);
        $question->chapter_id=$request->chapter;
        $question->question_text=$request->question;
        $question->answer=$request->answer;
        $question->title=$request->title;
        $question->save();
        return redirect('/exercice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exercice = Questions::find($id);
        $exercice->delete();
        return redirect('/exercice');
    }
}
