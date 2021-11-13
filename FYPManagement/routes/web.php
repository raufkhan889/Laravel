<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\AdvisorController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/dashboard/apply', [HomeController::class, 'apply'])->name('dashboard.apply');
Route::post('/dashboard/apply', [HomeController::class, 'createApply'])->name('dashboard.apply');

Route::get('/dashboard/title', [HomeController::class, 'title'])->name('dashboard.title');
Route::post('/dashboard/title', [HomeController::class, 'createTitle'])->name('dashboard.title');

Route::get('/dashboard/advisor', [HomeController::class, 'advisor'])->name('dashboard.advisor');

Route::prefix('advisors')->name('advisors.')->group(function () {
    // for non-logged in advisors
    Route::middleware(['advisor.guest'])->group(function () {
        Route::view('/login', 'advisor.login')->name('login');
        Route::post('/login', [AdvisorController::class, 'authenticate'])->name('login');
    });
    // for regular staff
    Route::middleware(['advisor.auth'])->group(function () {
        Route::get('/dashboard', [AdvisorController::class, 'dashboard'])->name('dashboard');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {
    // for non-logged in users
    Route::middleware(['admin.guest'])->group(function () {
        Route::view('/login', 'admin.login')->name('login');
        Route::post('/login', [AdminController::class, 'authenticate'])->name('login');
    });
    // for normal admin
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    });
});
