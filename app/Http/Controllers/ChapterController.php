<?php

namespace App\Http\Controllers;

use App\Mail\SendCertificat;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\Progression;
use App\Models\Questions;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ChapterController extends Controller
{
    public function index(Request $request, $idcours, $chapterid)
    {
        $decodedUser = $request->decoded_user;
        $userId = $decodedUser->id;
        $course = Course::findOrFail($idcours);
        $chapter = Chapter::findOrFail($chapterid);
        $courseContent = $chapter->contents()->get();
        $exercices = Questions::whereHas('chapter', function ($query) use ($chapterid) {
            $query->where('id', $chapterid);
        })->get();
        $chapters = $course->chapters()->get();
        $courses = Course::where('price', 0)->get();
        $answers = DB::table('answers')
            ->select(
                'answers.id as answer_id',
                'answers.question_id',
                'answers.answer_text',
                'answers.is_correct',
                'questions.chapter_id as chapter_id',
                'questions.title'
            )
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->join('chapters', 'questions.chapter_id', '=', 'chapters.id')
            ->where('chapters.course_id', '=', $idcours)
            ->where('chapters.id', '=', $chapterid)
            ->where('answers.user_id', '=', $userId)
            ->get();
        // dd($answers);
        $all_correct = $answers->every(function ($answer) {
            return $answer->is_correct === 1;
        });
        $progressions = Progression::where('user_id', $userId)
            ->get();
        $chpters = Chapter::where('course_id', $idcours)->get();

        $allChaptersInProgression = true;

        foreach ($chapters as $chapter) {
            $chapterProgression = DB::table('progressions')->where('chapter_id', $chapter->id)->exists();
            if (!$chapterProgression) {
                $allChaptersInProgression = false;
                break;
            }
        }
        if ($allChaptersInProgression) {
          $user=User::find($userId);
          $userEmail=$user->email;
          $courseName=$course->title;
          $userName=$user->name;
          $this->sendApprovedEmail($userEmail,$courseName,$userName);
        } else {
        //    dd('Pas dans la table progressions');

        }

        return view('courses.chapter', compact('courseContent', 'chapters', 'courses', 'course', 'exercices', 'all_correct', 'answers', 'progressions'));
    }
    private function sendApprovedEmail($userEmail,$courseName,$userName)
    {
        $subject = 'Certificat';
        $body = $courseName;

        Mail::to($userEmail)
            ->send(new SendCertificat($subject, $body, $userName));
    }


    public function chapter(Request $request)
    {
        $course = $request->input('course_id');
        $chapters = Chapter::where('course_id', $course)->get();
        return response()->json($chapters);
    }

}
