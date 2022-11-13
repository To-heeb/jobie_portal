<?php

use App\Models\Job;
use App\Models\Company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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


// Route::get('/', function () {
//     return view('user.dashboard', [
//         'featured_companies' => Company::all(),
//     ]);
// });



Route::group([
    'prefix' => '/admin',
    'as' => 'admin.',
], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
});

Route::group([
    'prefix' => '/user',
    'as' => 'user.',
], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/login', [UserController::class, 'login']);
    Route::get('/register', [UserController::class, 'create']);
    Route::get('/applications', [UserController::class, 'applications']);
    Route::get('/search_job', [UserController::class, 'search_job']);
    Route::get('/companies', [UserController::class, 'companies']);
});
