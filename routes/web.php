<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectsController;

Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
