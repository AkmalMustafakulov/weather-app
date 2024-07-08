<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/london', [WeatherController::class, 'london']);
Route::get('/moscow', [WeatherController::class, 'moscow']);
Route::get('/dushanbe', [WeatherController::class, 'dushanbe']);
Route::get('/washington', [WeatherController::class, 'washington']);

