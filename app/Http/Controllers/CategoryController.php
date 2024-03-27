<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.category.category',compact('categories'));
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
            'name' => 'required|unique:categories',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,svg,gif|max:2048',
        ]
        ,[
            'name.required' => 'Le champ nom est important',
            'name.unique' => 'Ce nom est déjà pris',
        ]);
        $uploadDir = 'images/';
        $uploadFileName = uniqid() . '.' . $request->file('image_path')->getClientOriginalExtension();
        $request->file('image_path')->move($uploadDir, $uploadFileName);

        $category = new Category();
        $category->name = $request->name;
        $category->image_path = $uploadFileName;
        $category->save();

        return redirect('/categories')->with('success', 'Category created successfully');
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
        $category = category::find($id);
        return view('dashboard.category.editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,svg,gif|max:2048',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        if($request->hasfile('image_path')){
            $uploadFileName = uniqid() . '.' . $request->file('image_path')->getClientOriginalExtension();
            $uploadDir = 'images/';
            $request->file('image_path')->move($uploadDir, $uploadFileName);
            $category->image_path = $uploadFileName;
        }
        $category->update();

        return redirect('/categories')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('success', 'Category deleted successfully');
    }
}
