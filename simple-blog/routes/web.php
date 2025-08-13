<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;

Route::get('/home', [PostController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});

