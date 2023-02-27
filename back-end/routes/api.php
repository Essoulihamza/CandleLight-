<?php

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;

// _________________________________________________________ Protected Routes ______________________________________________________//
Route::group(['middleware' => ['auth:sanctum']], function() {

    // user ::
    Route::post('/Logout', [UserController::class, 'Logout']);
    Route::patch('/update/{user}', [UserController::class, 'update']);
    Route::delete('/delete/{user}', [UserController::class, 'destroy']);
    
    // post ::
    Route::resource('/posts', PostController::class);
    Route::get('/MyPosts', [PostController::class, 'showMine']);
    
    // like ::
    Route::post('/likes/{post}', [LikeController::class, 'store']);
    Route::delete('/likes/{post}', [LikeController::class, 'destroy']);
    
    // comment :: 
    Route::resource('/Comments', CommentController::class);
});


// _________________________________________________________ Public Routes ______________________________________________________//
//user ::
Route::post('/SignUp', [UserController::class, 'SignUp']);
Route::post('/Login', [UserController::class, 'Login']);

// post ::
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show']);

// like ::
Route::get('/post/likes/{post}', [LikeController::class, 'showPostLikes']);
Route::get('/comment/likes/{comment}', [LikeController::class, 'showCommentLikes']);

// comment :: 
Route::get('/post/comments/{post}', [CommentController::class, 'showPostComments']);

// category :: 
Route::get('/categories', [CategoryController::class , 'index']);
Route::get('/category/{category}', [CategoryController::class, 'show']);



