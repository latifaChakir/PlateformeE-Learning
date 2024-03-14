<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeController;
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
    Route::get('/content/{idcours}/{chapterid}', [ChapterController::class, 'index']);
    Route::get('/courses/{id}', [HomeController::class, 'index']);
    Route::resource('course', CourseController::class);
    Route::resource('contentCourse', ContentController::class);
    Route::get('/dashboard', [DashController::class, 'index']);
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'create'])->name('auth.register.post');
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login.post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

