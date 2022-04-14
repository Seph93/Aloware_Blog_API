<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CommentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('blog', [BlogPostController::class, 'index']);
Route::get('comment', [CommentController::class, 'index']);
Route::get('comment/{blog}', [CommentController::class, 'show']);
Route::post('comment', [CommentController::class, 'store']);