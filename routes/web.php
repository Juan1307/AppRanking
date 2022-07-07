<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RankingController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CoursesController;
// use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [RankingController::class, 'index']);

Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/{id}', [StudentsController::class, 'subindex']);
Route::get('/students/topics', [StudentsController::class, 'indextopics']);

Route::get('/courses', [CoursesController::class, 'index']);