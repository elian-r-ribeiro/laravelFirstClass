<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', [ExampleController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/updateStudent', [StudentController::class, 'update']);
Route::get('/library', [LibraryController::class, 'index']);
Route::get('/updateLibrary', [LibraryController::class, 'update']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/updatePost', [PostController::class, 'update']);
