<?php

use App\Actions\User\PhotoProfileUpdate;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'has.student'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/photo-profile-form', [ProfileController::class, 'formIndex'])->name('photo-profile.form');
    Route::post('/photo-profile-form', [ProfileController::class, 'update'])->name('photo-profile.form.post');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'no.student'])->group(function () {
    Route::get('/student-form', [StudentController::class, 'formIndex'])->name('student.form');
    Route::post('/student-form', [StudentController::class, 'formStore'])->name('student.form.post');
});

