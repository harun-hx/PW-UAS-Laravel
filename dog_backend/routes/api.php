<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\UserController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/breeds', [BreedController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/breeds', [BreedController::class, 'store']);
    Route::put('/breeds/{id}', [BreedController::class, 'update']);
    Route::delete('/breeds/{id}', [BreedController::class, 'destroy']);
    Route::apiResource('users', UserController::class);
});
