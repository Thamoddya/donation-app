<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/v1')->group(function () {
    Route::post('/login', [\App\Http\Controllers\UserLoginController::class, 'login']);
    Route::post('/register', [\App\Http\Controllers\UserController::class , 'register']);
    Route::get('/packages/all', [\App\Http\Controllers\PackageController::class , 'showAll']);
    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('/user', \App\Http\Controllers\UserController::class);
        Route::apiResource('/package', \App\Http\Controllers\PackageController::class);
    });
});
