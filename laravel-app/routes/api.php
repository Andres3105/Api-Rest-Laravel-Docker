<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->middleware('api')->group(function () {
    Route::apiResource('products', ProductController::class);
});