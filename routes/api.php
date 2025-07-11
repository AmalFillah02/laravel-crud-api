<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::middleware('api')->group(function () {
    Route::apiResource('posts', PostController::class);
});
