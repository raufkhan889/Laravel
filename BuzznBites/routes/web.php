<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\MyorderController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\WishlistController;

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

// frontend routes 
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('category', [HomeController::class, 'category'])->name('category');
Route::get('/show-category/{slug}', [HomeController::class, 'showCategory'])->name('show-category');
Route::get('/show/{c_slug}/{p_slug}', [HomeController::class, 'showProduct'])->name('show');
Route::get('products', [HomeController::class, 'products'])->name('products');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::post('search', [HomeController::class, 'search'])->name('search');

// cart routes 
Route::post('cart-count', [CartController::class, 'count'])->name('cart-count');
Route::post('add-cart', [CartController::class, 'addToCart'])->name('add-cart');

// Wishlist route 
Route::post('wishlist-count', [WishlistController::class, 'count'])->name('wishlist-count');
Route::post('add-wishlist', [WishlistController::class, 'addToWishlist'])->name('add-wishlist');

// for logged in users 
Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class, 'index'])->name('cart');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('update-cart');
    Route::post('delete-cart', [CartController::class, 'deleteCart'])->name('delete-cart');

    // checkout routes 
    Route::get('checkout/create', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::post('checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');

    // user order routes 
    Route::get('orders', [MyorderController::class, 'index'])->name('orders');
    Route::get('orders/view/{id}', [MyorderController::class, 'view'])->name('orders.view');

    // Wishlist Routes 
    Route::get('wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::post('delete-wishlist', [WishlistController::class, 'deleteWishlist'])->name('delete-wishlist');
});

// admin routes 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['auth', 'isAdmin'])->group(function () {
        // dashboard routes 
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Category routes 
        Route::get('category', [CategoryController::class, 'index'])->name('category');
        Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::post('category/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

        // Products Routes 
        Route::get('product', [ProductController::class, 'index'])->name('product');
        Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::post('product/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

        // Orders Routes 
        Route::get('orders', [OrderController::class, 'index'])->name('orders');
        Route::get('orders/view/{id}', [OrderController::class, 'view'])->name('orders.view');
        Route::put('orders/update/{id}', [OrderController::class, 'update'])->name('orders.update');
        Route::get('orders/history', [OrderController::class, 'history'])->name('orders.history');

        // User Routes 
        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::get('users/view/{id}', [UserController::class, 'view'])->name('users.view');
        Route::post('users/destroy', [UserController::class, 'destroy'])->name('users.destroy');
    });
});
