<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DatasetController;
use App\Http\Controllers\ComplaintController;

// Public Routes (No Login Needed)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/datasets', [DatasetController::class, 'index']); // Anyone can see the list

// Protected Routes (Login Required)
Route::middleware('auth:sanctum')->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // User Routes
    Route::get('/complaints', [ComplaintController::class, 'index']);
    Route::post('/complaints', [ComplaintController::class, 'store']);
    Route::put('/complaints/{id}', [ComplaintController::class, 'update']);

    // Admin Routes (We check is_admin inside Controller or here with middleware)
    // For simplicity, we assume frontend hides these buttons, or you add logic
    Route::post('/datasets', [DatasetController::class, 'store']);
    Route::put('/datasets/{id}', [DatasetController::class, 'update']);
    Route::delete('/datasets/{id}', [DatasetController::class, 'destroy']);
    
    // Get current user info
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});