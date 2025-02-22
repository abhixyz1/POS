<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Products dengan prefix category
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('products.food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('products.beauty-health');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('products.home-care');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('products.baby-kid');
});

// Halaman User dengan route parameter
Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user.profile');

// Halaman Transaction
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');


