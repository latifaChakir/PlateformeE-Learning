<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Course;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index($idcours,$chapterid){

        $course=Course::findOrFail($idcours);
        $course=Course::findOrFail($idcours);
        $chapters = $course->chapters()->get();
        $chapter = Chapter::findOrFail($chapterid);
        $courseContent = $chapter->contents()->get();
        $courses=Course::all();

        // dd($courseContent);

        return view('courses.chapter', compact('courseContent','chapters','courses','course'));
    }

    public function chapter(Request $request){
        $course = $request->input('course_id');
        $chapters = Chapter::where('course_id', $course)->get();
        return response()->json($chapters);
    }

}
