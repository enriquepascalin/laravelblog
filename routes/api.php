<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::middleware('auth:sanctum')->group(function () {
  Route::apiResource('posts', PostController::class);
  Route::apiResource('comments', CommentController::class)->except(['index', 'show']);
});