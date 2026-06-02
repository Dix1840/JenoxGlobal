<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\ResetPasswordController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/categories', [FrontendController::class, 'categories'])->name('categories');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/product/{slug}', [FrontendController::class, 'productDetail'])->name('product.detail');
Route::get('/certificates', [FrontendController::class, 'certificates'])->name('certificates');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::post('/contact/send', [FrontendController::class, 'sendContact'])->name('contact.send');

// Admin Auth Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login',    [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login',   [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register',[AuthController::class, 'register']);
    Route::post('/logout',  [AuthController::class, 'logout'])->name('logout');

    // Forgot / Reset Password
    Route::get('/forgot-password',        [ForgotPasswordController::class, 'showForm'])->name('password.forgot');
    Route::post('/forgot-password',       [ForgotPasswordController::class, 'sendLink'])->name('password.forgot.send');
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showForm'])->name('password.reset.form');
    Route::post('/reset-password',        [ResetPasswordController::class, 'reset'])->name('password.reset');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
