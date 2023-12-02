<?php

use App\Http\Controllers\StudentController;
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
Route::get('/student', [StudentController::class, 'index'])->name('ogts.students');
Route::get('/student/create', [StudentController::class, 'create'])->name('ogts.create');
Route::post('/student', [StudentController::class, 'store'])->name('ogts.store');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('ogts.edit');
Route::put('/student/{student}/update', [StudentController::class, 'update'])->name('ogts.update');
Route::delete('/student/{student}/delete', [StudentController::class, 'destroy'])->name('ogts.destroy');

Route::get('/student/login', [StudentController::class, 'login'])->name('ogts.login');


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
