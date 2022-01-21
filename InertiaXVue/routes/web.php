<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::redirect('/', 'home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Cars Page routes
Route::get('/cars', [CarController::class, 'index'])->name('cars');

Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');

Route::post('/cars/store', [CarController::class, 'store'])->name('cars.store');

Route::get('cars/show/{id}', [CarController::class, 'show'])->name('cars.show');

Route::get('cars/edit/{id}', [CarController::class, 'edit'])->name('cars.edit');

Route::post('/cars/update', [CarController::class, 'update'])->name('cars.update');

Route::get('cars/destroy/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
