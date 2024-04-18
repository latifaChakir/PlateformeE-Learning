<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index(){
        $users = User::where('id_role', 2)->count();
        $categories = Category::count();
        $coursesfree = Course::where('price', 0)->count();
        $coursePayment = Course::whereNotNull('price')
        ->where('price', '<>', 0)
        ->count();
        return view("dashboard.dashboard", compact('users', 'categories', 'coursesfree', 'coursePayment'));
    }
}
