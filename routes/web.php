<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectsController;

Route::get('/home', function () {
    return view('pages.home');
})->name('home');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
