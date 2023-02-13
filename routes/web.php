<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
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
    return view('home.landing');
})->name('landing');
Route::get('/about', function () {
    return view('home.about');
})->name('about');
Route::get('/contact', function () {
    return view('home.contact');
})->name('contact');

Route::get('/findtalent', [ProfileController::class, 'getAll']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Jobs
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
    Route::get('/createJob', [JobController::class, 'create'])->name('createJob');
    Route::post('/createJob', [JobController::class, 'store']);
    Route::get('/editJob/{id}', [JobController::class, 'edit']);
    Route::post('/saveJob/{id}', [JobController::class, 'update']);
    Route::post('/deleteJob/{id}', [JobController::class, 'destroy']);
});

//FOR ADMIN ROUTES
Route::middleware(['auth','isAdmin'])->group(function(){
    // Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('/createCategory', [CategoryController::class, 'create']);
    Route::post('/createCategory', [CategoryController::class, 'store']);
    Route::get('/editCategory/{id}', [CategoryController::class, 'edit']);
    Route::post('/saveCategory/{id}', [CategoryController::class, 'update']);
    Route::post('/deleteCategory/{id}', [CategoryController::class, 'destroy']);

    Route::get('/admin/jobs', [JobController::class, 'getAllJobsAdmin'])->name('adminJobs');
    Route::post('/admin/deleteJob/{id}', [JobController::class, 'deleteJobAdmin']);
});


require __DIR__.'/auth.php';
