<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::middleware('auth:sanctum')->group(function () {
  Route::apiResource('posts', PostController::class);
  Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('admin');
});