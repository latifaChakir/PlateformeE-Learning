<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CertificatController extends Controller
{
    public function index(){
        $coursePayment = Course::whereNotNull('price')
        ->where('price', '<>', 0)
        ->get();
        $courses=Course::where('price', 0)->get();
        $categories=Category::all();
        return view("user.certificat", compact('categories','coursePayment','courses'));
    }

    public function getCertificat($courseId){
        $course=Course::findOrFail($courseId);
        $coursePayment = Course::whereNotNull('price')
        ->where('price', '<>', 0)
        ->get();
        $categories=Category::all();
        $courses=Course::where('price', 0)->get();
        return view("user.getcertificat", compact('categories','coursePayment','courses','course'));

    }

    public function checkout(Request $request)
    {}
}
