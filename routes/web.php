<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/testimonials', 'pages.testimonials')->name('testimonials');

Route::resource('products', ProductsController::class);

Route::redirect('/index.html', '/');
Route::redirect('/about.html', '/about');
Route::redirect('/contact.html', '/contact');
Route::redirect('/testimonials.html', '/testimonials');
Route::redirect('/products.html', '/products');
