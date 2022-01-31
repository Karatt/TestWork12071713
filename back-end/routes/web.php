<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth:sanctum')->group( function () {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('posts', PostController::class)->only(['edit', 'create', 'store', 'update', 'destroy']);
});

Route::resource('posts', PostController::class)
    ->only(['index', 'show'])
    ->names(['index' => 'posts'])
    ->missing(function () {
        return Redirect::route('posts');
    });


require __DIR__.'/auth.php';
