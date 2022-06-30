<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/registration', [StudentController::class, 'StudentRegistration'])->name("StudentRegistration");
Route::post('/registration', [StudentController::class, 'StudentRegistrationSubmitted'])->name('StudentRegistrationSubmitted');

Route::get('/login', [StudentController::class, 'StudentLogin'])->name("StudentLogin");
Route::post('/login', [StudentController::class, 'StudentLoginSubmitted'])->name('StudentLoginSubmitted');

Route::get('/dashboard', [StudentController::class, 'StudentDash'])->name("StudentDash");


Route::get('/student/edit/{id}', [StudentController::class, 'StudentEdit'])->name("StudentEdit");
Route::post('/student/edit/{id}', [StudentController::class, 'StudentEditSubmitted'])->name("StudentEditSubmitted");