<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;

// AUTH
Route::prefix('user')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
    Route::get('/whoami', function (Request $request) {
        return $request->user();
    })->middleware('auth:api');
});

// BOOK
Route::prefix('book')->group(function () {
    Route::get('/', [BookController::class, 'index']);           // Public
    Route::get('/{id}', [BookController::class, 'show']);        // Public

    Route::middleware('auth:api')->group(function () {
        Route::post('/', [BookController::class, 'store']);      // Create (protected)
        Route::put('/{id}', [BookController::class, 'update']);  // Update (protected)
        Route::delete('/{id}', [BookController::class, 'destroy']); // Delete (protected)
    });
});