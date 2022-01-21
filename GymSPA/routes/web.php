<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeadController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/leads', [LeadController::class, 'index'])->name('leads');

Route::get('/leads/add', [LeadController::class, 'create'])->name('leads.add');

Route::post('/leads/save', [LeadController::class, 'store'])->name('leads.store');

Route::get('/leads/list/{lead}', [LeadController::class, 'show'])->name('leads.view');

Route::post('leads/update', [LeadController::class, 'update'])->name('leads.update');
