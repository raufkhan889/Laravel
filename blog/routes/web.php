<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\AdminDashboardController;
use \App\Http\Controllers\ProductController;

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

// after user login
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logoutUser'])->name('logout');

// home display and show products route 
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'show'])->where('id', '[0-9]+')->name('show');

// products managers route through dashboard
Route::get('/dashboard/manage', [ProductController::class, 'manage'])->name('dashboard.manage');
Route::get('/dashboard/create', [ProductController::class, 'create'])->name('dashboard.create');
Route::get('/dashboard/search', [ProductController::class, 'search'])
    ->where('name', '[a-zA-Z]+')
    ->name('dashboard.search');

// route for admin 
Route::prefix('admin')->name('admin.')->group(function () {
    // for non-logged in users
    Route::middleware(['admin.guest'])->group(function () {
        Route::get('/login', [AdminController::class, 'login'])->name('login');
        Route::post('login', [AdminController::class, 'authenticate'])->name('auth');
    });
    // for regular users
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AdminController::class, 'logoutAdmin'])->name('logout');
    });
});
