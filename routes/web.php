<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminColorController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShareController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/social-share', [ShareController::class, 'share'])->name('share');

Route::get('categories/{category}/show', [CategoryController::class, 'show'])->name('front.categories.show');

Route::get('products', [ProductController::class, 'index'])->name('products');
Route::get('products/{product}/show', [ProductController::class, 'show'])->name('front.products.show');

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Auth::routes();

Route::prefix('admin')->middleware(['auth', 'role'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::resource('categories', AdminCategoryController::class);

    Route::resource('colors', AdminColorController::class);

    Route::resource('products', AdminProductController::class);

    Route::resource('roles', AdminRoleController::class);

    Route::resource('users', AdminUserController::class);
    
});