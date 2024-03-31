<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificatController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ExerciceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\quizController;
use App\Http\Controllers\QuizzController;
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



Route::get('/', [AccueilController::class, 'index']);
Route::get('/content/{idcours}/{chapterid}', [ChapterController::class, 'index'])->middleware('jwt.check');
;
Route::get('/courses/{id}', [HomeController::class, 'index']);
Route::get('/startExo/{id}', [QuestionController::class, 'startExo']);
Route::get('/contentexo/{id}', [QuestionController::class, 'contentExo']);
Route::get('/showanswer/{id}', [QuestionController::class, 'showAnswer']);

Route::post('/submitAnswer', [QuestionController::class, 'submitAnswer'])->middleware('jwt.check');
Route::post('/submitAnswerforCoursPay', [QuestionController::class, 'submitAnswerCoursPayant'])->middleware('jwt.check');

Route::get('/showExercices', [QuestionController::class, 'showExercices']);
Route::resource('exercice', ExerciceController::class);
Route::resource('course', CourseController::class);
Route::resource('contentCourse', ContentController::class);
Route::resource('categories', CategoryController::class);
Route::resource('quizzes', QuizzController::class);
Route::get('/quizzes/{quiz}', [QuizzController::class, 'cratequestions'])->name('quizzes.questions.create');
Route::post('/addquestionQuiz', [QuizzController::class, 'add']);

Route::post('/storeResponse', [quizController::class, 'storeResponses'])->name('store_responses')->middleware('jwt.check');
Route::get('/showResult/{courseId}', [quizController::class, 'showResults'])->name('showResult')->middleware('jwt.check');;


Route::get('/certificat', [CertificatController::class, 'index']);
Route::get('/certificat/{id}', [CertificatController::class, 'getCertificat']);
Route::get('/checkout/{id}', [CertificatController::class, 'checkout'])->middleware('jwt.check');
Route::get('/success/{course}', [CertificatController::class, 'success'])->name('success');
Route::get('/quiz/{id}', [quizController::class, 'showQuiz']);
Route::get('/dashboard', [DashController::class, 'index']);
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'create'])->name('auth.register.post');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/chapters', [ChapterController::class, 'chapter']);

