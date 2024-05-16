<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index')->middleware('auth');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create')->middleware('auth');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store')->middleware('auth');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit')->middleware('auth');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update')->middleware('auth');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('auth');

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update')->middleware('auth');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy')->middleware('auth');

Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');

Route::get('/about', function () {
    return view('layouts.about');
})->name('about');



