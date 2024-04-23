<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificatController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ExerciceController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\quizController;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/error', function () {
    return view('404_error');
});

Route::get('/search', [AccueilController::class, 'search']);
Route::get('/searchItem', [CertificatController::class, 'search']);
Route::get('/searhexo', [QuestionController::class, 'search']);

Route::get('/filter', [CertificatController::class, 'filter']);
Route::get('/coursesFree', [AccueilController::class, 'index']);



Route::get('/', [AccueilController::class, 'index']);
Route::get('/content/{idcours}/{chapterid}', [ChapterController::class, 'index'])->middleware('jwt.check');
;
Route::get('/courses/{id}', [HomeController::class, 'index']);
Route::get('/startExo/{id}', [QuestionController::class, 'startExo'])->middleware('jwt.check');;
Route::get('/contentexo/{id}', [QuestionController::class, 'contentExo']);
Route::get('/showanswer/{id}', [QuestionController::class, 'showAnswer']);

Route::post('/submitAnswer', [QuestionController::class, 'submitAnswer'])->middleware('jwt.check');
Route::post('/submitAnswerforCoursPay', [QuestionController::class, 'submitAnswerCoursPayant'])->middleware('jwt.check');

Route::get('/showExercices', [QuestionController::class, 'showExercices']);
Route::resource('exercice', ExerciceController::class)->middleware('admin');;
Route::resource('course', CourseController::class)->middleware('admin');;
Route::resource('users', UserController::class)->middleware('admin');;
Route::resource('contentCourse', ContentController::class)->middleware('admin');;
Route::resource('categories', CategoryController::class)->middleware('admin');;
Route::resource('quizzes', QuizzController::class)->middleware('admin');;
Route::get('/quizzes/{quiz}', [QuizzController::class, 'cratequestions'])->name('quizzes.questions.create');
Route::post('/addquestionQuiz', [QuizzController::class, 'add']);

Route::post('/storeResponse', [quizController::class, 'storeResponses'])->name('store_responses')->middleware('jwt.check');
Route::get('/showResult/{courseId}', [quizController::class, 'showResults'])->name('showResult')->middleware('jwt.check');;


Route::get('/certificat', [CertificatController::class, 'index']);
Route::get('/certificat/{id}', [CertificatController::class, 'getCertificat']);
Route::get('/checkout/{id}', [CertificatController::class, 'checkout'])->middleware('jwt.check');
Route::get('/success/{course}', [CertificatController::class, 'success'])->name('success');
Route::get('/quiz/{id}', [quizController::class, 'showQuiz']);
Route::get('/dashboard', [DashController::class, 'index'])->middleware('admin');;
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'create'])->name('auth.register.post');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/forgetpassword', [AuthController::class, 'forgetpassword']);
Route::post('/resetpasswordPost', [AuthController::class, 'sendemail']);
Route::post('/newpasswordPost', [AuthController::class, 'addpassword']);
Route::get('/resetwithemail/{token}', [AuthController::class, 'reset'])->name('resetwithemail');

Route::get('/chapters', [ChapterController::class, 'chapter']);
Route::get('Contacts', [ContactsController::class, 'contact']);
Route::get('Commantaires', [ContactsController::class, 'commantaire']);
Route::get('showDetail/{messageId}', [ContactsController::class, 'showCommantaire']);
Route::get('refusedComment/{messageId}', [ContactsController::class, 'refusedCommantaire']);
Route::get('AcceptComment/{messageId}', [ContactsController::class, 'AcceptComment']);

Route::post('/sendMessage', [ContactsController::class, 'SendMessage']);


Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle'])->name('auth.logout');
