<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/animaux', [AnimalController::class, 'index']);
Route::post('/animaux', [AnimalController::class, 'store']);
Route::patch('/animaux/{animal}/status', [AnimalController::class, 'updateStatus']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::patch('/animaux/{animal}', [AnimalController::class, 'update']);
