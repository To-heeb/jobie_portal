<?php

use App\Models\Job;
use App\Models\Company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\JobSubCategoryController;

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
    Route::get('/login', [AdminController::class, 'login'])->name('login')->withoutMiddleware(['auth:admin']);
    Route::post('/login', [AdminController::class, 'authenticate'])->withoutMiddleware(['auth:admin']);
    Route::get('/profile', [AdminController::class, 'profile']);
    Route::put('/profile', [AdminController::class, 'update_profile']);
    Route::post('/logout', [AdminController::class, 'logout']);

    Route::get('/companies', [AdminController::class, 'companies']);
    Route::get('/campany/{id}', [AdminController::class, 'companies']);

    Route::get('/salary_range', [AdminController::class, 'salary_range']);
    Route::get('/salary_range/{id}', [AdminController::class, 'get_salary_range']);
    Route::post('/salary_range', [AdminController::class, 'salary_range']);
    Route::put('/salary_range', [AdminController::class, 'salary_range']);
    Route::delete('/salary_range/{id}', [AdminController::class, 'delete_salary_range']);

    Route::get('/industry', [IndustryController::class, 'index']);
    Route::post('/industry', [IndustryController::class, 'store']);
    Route::put('/industry', [IndustryController::class, 'update']);
    Route::get('/industry/{id}', [IndustryController::class, 'get_industry']);

    Route::get('/job_category', [JobCategoryController::class, 'index']);
    Route::get('/job_category/{id}', [JobCategoryController::class, 'get_job_category']);
    Route::post('/job_category', [JobCategoryController::class, 'store']);
    Route::put('/job_category', [JobCategoryController::class, 'update']);
    Route::delete('/job_category/{id}', [JobCategoryController::class, 'destroy']);

    Route::get('/job_sub_category/{id}', [JobSubCategoryController::class, 'get_job_sub_category']);
    Route::get('/job_sub_category', [JobSubCategoryController::class, 'index']);
    Route::post('/job_sub_category', [JobSubCategoryController::class, 'store']);
    Route::put('/job_sub_category', [JobSubCategoryController::class, 'update']);
    Route::delete('/job_sub_category/{id}', [JobSubCategoryController::class, 'destroy']);

    Route::get('/employers', [AdminController::class, 'employers']);
    Route::get('/companies', [AdminController::class, 'companies']);
    Route::get('/jobs', [AdminController::class, 'jobs']);

    Route::get('/delete', [JobController::class, 'destroy']);

    Route::group([
        'prefix' => '/jobs',
        'as' => 'jobs.',
    ], function () {
        Route::get('/delete', [JobController::class, 'destroy']);
        Route::get('/all_jobs', [JobController::class, 'index']);
    });


    Route::group([
        'prefix' => '/company',
        'as' => 'company.',
    ], function () {
        Route::get('/profile/{id}', [CompanyController::class, 'show']);
        Route::put('/profile/{id}', [CompanyController::class, 'update']);
        Route::get('/dashboard', [CompanyController::class, 'index']);
        Route::get('/delete', [CompanyController::class, 'destroy']);
        Route::post('/store', [CompanyController::class, 'store']);
    });
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
    Route::put('/profile', [EmployerController::class, 'update']);
    Route::get('/applications', [EmployerController::class, 'applications']);
    Route::get('/register', [EmployerController::class, 'create'])->withoutMiddleware(['auth:employer']);
    Route::post('/register', [EmployerController::class, 'store'])->withoutMiddleware(['auth:employer']);
    Route::post('/logout', [EmployerController::class, 'logout']);

    Route::group([
        'prefix' => '/jobs',
        'as' => 'jobs.',
    ], function () {
        Route::get('/', [JobController::class, 'jobs']);
        Route::get('/{id}', [JobController::class, 'edit']);
        Route::put('/{id}', [JobController::class, 'update']);
        Route::get('/create', [JobController::class, 'create']);
        Route::get('/dashboard', [JobController::class, 'index']);
        Route::post('/store', [JobController::class, 'store']);
        Route::get('/applications/{id}', [JobController::class, 'applications']);
        Route::get('/job_sub_categories/{id}', [JobSubCategoryController::class, 'get_job_sub_categories']);
    });

    Route::group([
        'prefix' => '/company',
        'as' => 'company.',
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
    Route::get('/applications/{id}', [UserController::class, 'applications']);
    Route::post('/application/store', [ApplicationController::class, 'store']);
    Route::get('/search_job', [UserController::class, 'search_job']);
    Route::get('/job/{id}', [UserController::class, 'job']);
    Route::get('/job_details/{id}', [UserController::class, 'get_job_details']);
    Route::get('/companies', [UserController::class, 'companies']);
    Route::get('/company/{id}', [UserController::class, 'company']);
    Route::post('/logout', [UserController::class, 'logout']);
});
