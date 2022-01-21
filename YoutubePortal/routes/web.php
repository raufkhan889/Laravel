<?php

use App\Http\Controllers\VideoController;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/myuploads', [VideoController::class, 'index'])->name('myuploads');

Route::get('/uploads/create', [VideoController::class, 'create'])->name('uploads.create');

Route::post('/uploads/store', [VideoController::class, 'store'])->name('uploads.store');

Route::get('/uploads/show/{id}', [VideoController::class, 'show'])->name('uploads.show');

Route::get('/uploads/edit/{id}', [VideoController::class, 'edit'])->name('uploads.edit');

Route::post('/uploads/update/{id}', [VideoController::class, 'update'])->name('uploads.update');

// Route::get('/uploads/downloadvid/{id}', [VideoController::class, 'downloadVid'])->name('uploads.downloadvid');

Route::get('/uploads/destroy/{id}', [VideoController::class, 'destroy'])->name('uploads.destroy');

Route::get('uploads/search', [VideoController::class, 'search'])->name('uploads.search');

Route::any('/home/{slug}', function () {
    return view('page404');
});
