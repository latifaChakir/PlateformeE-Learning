<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $courses = Course::all();
        $categories=Category::all();
        return view("dashboard.course.courses",compact("courses","categories"));
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
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,svg,gif|max:2048',
            'price',
            'category_id' => 'required',
        ]);
        $uploadDir = 'images/';
        $uploadFileName = uniqid() . '.' . $request->file('image_path')->getClientOriginalExtension();
        $request->file('image_path')->move($uploadDir, $uploadFileName);


        $course = new Course();
        $course->title = $request->title;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->id_categorie = $request->category_id;
        $course->image_path = $uploadFileName;

        $course->save();

        return redirect('/course')->with('success', 'Course created successfully');
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
        $categories=Category::all();
        $course = Course::find($id);
        return view('dashboard.course.editcourse', compact('course','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price'=>'required',
            'category_id' => 'required',
            'image_path' => 'image|mimes:jpeg,png,jpg,svg,gif|max:2048',
        ]);

        $course = Course::find($id);
        $course->title = $request->title;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->id_categorie = $request->category_id;

        if($request->hasfile('image_path')){
            $uploadFileName = uniqid() . '.' . $request->file('image_path')->getClientOriginalExtension();
            $uploadDir = 'images/';
            $request->file('image_path')->move($uploadDir, $uploadFileName);
            $course->image_path = $uploadFileName;

        }
        $course->update();

        return redirect('/course')->with('success', 'course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect('/course')->with('success', 'course deleted successfully');

    }
}
