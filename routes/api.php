<?php

use App\Http\Controllers\API\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::apiResource('book', BookController::class, [
    'only' => [
        'index',
        'show'
    ]
]);

Route::resource('book', BookController::class, [
    'except' => [
        'index',
        'show',
    ]
])-> middleware(['auth:api']);  
