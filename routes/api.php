<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::post('/users/login', 'login');
    Route::get('/users/logout', 'logout');
    Route::post('/users', 'store');
    Route::get('/users/{id}', 'show');
    Route::put('/users/{id}', 'update');
    Route::delete('/users/{id}', 'destroy');
});

Route::controller(TaskController::class)->group(function () {
    Route::get('/tasks', 'index');
    Route::post('/tasks', 'store');
    Route::get('/tasks/{id}', 'show');
    Route::put('/tasks/{id}', 'update');
    Route::delete('/tasks/{id}', 'destroy');
});