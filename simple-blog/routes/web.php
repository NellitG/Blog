<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});

