<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CommentController;

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
Route::get('/admin/index', function () {
    return view('/welcome');
});
Route::get('/admin/comments', [CommentController::class, 'Index']);
Route::get('/admin/comments/insert', [CommentController::class, 'Insert']);
Route::post('/admin/comments/insert', [CommentController::class, 'Insert']);
Route::post('/admin/comments/update={id}', [CommentController::class, 'update']);
Route::get('/admin/comments/update={id}', [CommentController::class, 'update']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
