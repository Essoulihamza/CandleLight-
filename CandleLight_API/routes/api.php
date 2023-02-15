<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// User
Route::post('/SignUp', [UserController::class, 'SignUp']);
Route::post('/Login', [UserController::class, 'Login']);
Route::post('/Logout', [UserController::class, 'Logout']);
Route::patch('/update', [UserController::class, 'update']);
Route::delete('/delete', [UserController::class, 'destroy']);

// Post
Route::resource('/posts', PostController::class);
