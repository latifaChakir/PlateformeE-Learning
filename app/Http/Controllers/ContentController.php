<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\ContentCourse;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = DB::select('SELECT content_courses.*, chapters.title AS chapters_title, courses.title AS courses_title
        FROM content_courses
        JOIN chapters ON content_courses.chapter_id = chapters.id
        JOIN courses ON chapters.course_id = courses.id');
        $courses=Course::where('price', 0)->get();
        return view("dashboard.Contenu.index", compact("contents","courses"));
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
            'course_id' => 'required',
            'chapter_name' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        $chapter = new Chapter();
        $chapter->course_id = $request->course_id;
        $chapter->title = $request->chapter_name;
        $chapter->save();

        $content = new ContentCourse();
        $content->chapter_id = $chapter->id;
        $content->title = $request->title;
        $content->content = $request->content;
        $content->save();

        return redirect('/contentCourse')->with('success', 'Course created successfully');

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
        $course = DB::select("SELECT content_courses.*, chapters.title AS chapters_title, chapters.course_id AS cours_id, courses.title AS courses_title
        FROM content_courses
        JOIN chapters ON content_courses.chapter_id = chapters.id
        JOIN courses ON chapters.course_id = courses.id
        WHERE content_courses.id='$id'")[0];
        $courses = Course::all();
        return view('dashboard.Contenu.edit', compact('course','courses'));

    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'chapter_name' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        $chapter = Chapter::findOrFail($id);
        $chapter->title = $request->chapter_name;
        $chapter->save();

        $content = ContentCourse::where('chapter_id', $chapter->id)->firstOrFail();
        $content->title = $request->title;
        $content->content = $request->content;
        $content->save();

        return redirect('/contentCourse')->with('success', 'Course updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = ContentCourse::find($id);
        $course->delete();
        return redirect('/ContentCourse')->with('success', 'course deleted successfully');
    }
}
