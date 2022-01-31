<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
// API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

// Route::resource('/posts', PostController::class);
Route::middleware('auth:sanctum')->group( function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);

    Route::resource('posts', PostController::class)->only(['store', 'update', 'destroy']);
});

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);
