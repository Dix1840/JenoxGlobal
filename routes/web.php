<?php

use App\Http\Controllers\FrontendController;
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
