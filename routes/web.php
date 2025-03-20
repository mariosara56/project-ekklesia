<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); });

Route::get('/about', function () { return view('about'); });

Route::get('/contact', function () { return view('contact'); });

Route::get('/gallery', function () { return view('gallery'); });

Route::get('/login', [LoginController::class, 'loginForm'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);
