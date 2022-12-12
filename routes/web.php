<?php

use App\Models\Job;
use App\Models\Company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployerController;

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


// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  


Route::get('/', function () {
    return view('welcome');
});



Route::group([
    'prefix' => '/admin',
    'as' => 'admin.',
    'middleware' => 'auth:admin'
], function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'authenticate']);
    Route::get('/profile', [AdminController::class, 'profile']);
});

Route::group([
    'prefix' => '/employer',
    'as' => 'employer.',
    'middleware' => 'auth:employer'
], function () {
    Route::get('/', [EmployerController::class, 'index']);
    Route::get('/dashboard', [EmployerController::class, 'index']);
    Route::get('/login', [EmployerController::class, 'login'])->name('login')->withoutMiddleware(['auth:employer']);
    Route::post('/login', [EmployerController::class, 'authenticate'])->withoutMiddleware(['auth:employer']);
    Route::get('/profile', [EmployerController::class, 'profile']);
    Route::get('/register', [EmployerController::class, 'create'])->withoutMiddleware(['auth:employer']);
    Route::post('/register', [EmployerController::class, 'store'])->withoutMiddleware(['auth:employer']);
    Route::post('/logout', [EmployerController::class, 'logout']);

    Route::group([
        'prefix' => '/jobs',
        'as' => 'jobs.',
        'middleware' => 'auth:employer'
    ], function () {
        Route::get('/create', [JobController::class, 'create']);
        Route::get('/dashboard', [JobController::class, 'index']);
        Route::post('/store', [JobController::class, 'store']);
    });

    Route::group([
        'prefix' => '/company',
        'as' => 'company.',
        'middleware' => 'auth:employer'
    ], function () {
        Route::get('/create', [CompanyController::class, 'create']);
        Route::get('/edit/{:id}', [CompanyController::class, 'edit']);
        Route::get('/profile/{id}', [CompanyController::class, 'show']);
        Route::put('/profile/{id}', [CompanyController::class, 'update']);
        Route::get('/dashboard', [CompanyController::class, 'index']);
        Route::get('/delete', [CompanyController::class, 'destroy']);
        Route::post('/store', [CompanyController::class, 'store']);
    });
});

Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'middleware' => 'auth'
], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/dashboard', [UserController::class, 'index']);
    Route::get('/login', [UserController::class, 'login'])->name('login')->withoutMiddleware(['auth']);
    Route::post('/login', [UserController::class, 'authenticate'])->withoutMiddleware(['auth']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/register', [UserController::class, 'create'])->withoutMiddleware(['auth']);
    Route::post('/register', [UserController::class, 'store'])->withoutMiddleware(['auth']);
    Route::get('/applications', [UserController::class, 'applications']);
    Route::get('/search_job', [UserController::class, 'search_job']);
    Route::get('/companies', [UserController::class, 'companies']);
    Route::get('/campany/{:id}', [UserController::class, 'companies']);
    Route::post('/logout', [UserController::class, 'logout']);
});
