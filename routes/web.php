<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


#Route::get('/', function () {
#    return view('welcome');
#});

// React frontend
Route::get('/', function () {
  return view('welcome');
});

// Auth routes (from Laravel Breeze, if installed)
Route::get('/dashboard', [ProfileController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('admin');