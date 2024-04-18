<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

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
{
    $decodedUser = $request->decoded_user;
    $userId = $decodedUser->id;

    $course = Course::find($request->id);
    $title = $course->title;
    $price = $course->price;

    Stripe::setApiKey(config('stripe.sk'));

    $session = Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [
            [
                'price_data' => [
                    'currency' => 'USD',
                    'product_data' => [
                        'name' => $title,
                    ],
                    'unit_amount' => $price * 100,
                ],
                'quantity' => 1,
            ]
        ],
        'mode' => 'payment',
        'success_url' => route('success', $course),
        'cancel_url' => 'http://127.0.0.1:8000/error',
        'metadata' => [
            'user_id' => $userId,
            'course_id' => $request->id,
        ],
    ]);

    return redirect()->away($session->url);
}

    public function success(Request $request, $courseId)
{
    $course=Course::find($courseId);
    return redirect('/courses/'.$courseId);
}

public function search(Request $request)
{
    $searchTerm = $request->input('search');
    $coursePayment = Course::whereNotNull('price')
        ->where('price', '<>', 0)
        ->where('title', 'like', "%{$searchTerm}%")
        ->paginate(4);
        if ($request->ajax()) {
            return view('course_list', compact('coursePayment'))->render();
        }
    return view('user.search', compact('coursePayment'));
}

public function filter(Request $request)
{
    $checkedCategory = $request->input('category');
    $coursePayment = Course::join('categories', 'courses.category_id', '=', 'categories.id')
           ->where('price', '<>', 0)
           ->where('categories.name', "{$checkedCategory}")
           ->get();

    return view('user.filter', compact('coursePayment'));
}


}
