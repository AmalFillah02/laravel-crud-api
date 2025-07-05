<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostWebController;

Route::resource('posts', PostWebController::class);