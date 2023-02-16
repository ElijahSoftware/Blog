<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistratieController;
use App\Http\Controllers\SessiesController;
use Illuminate\Support\Facades\Route;
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



// Blog Route
Route::get('post', [PostController::class, 'index']);  
Route::get('post/maken',[PostController::class,'maken']);
Route::post('post', [PostController::class,'opslaan']);
Route::get('post/{kijk}', [PostController::class,'zien']);

Route::post('post/{kijk}/comments', [CommentsController::class, 'opslaan']);

Route::get('/register', [RegistratieController::class, 'maken']);
Route::post('/register', [RegistratieController::class, 'opslaan']);

Route::get('/login', [SessiesController::class, 'maken']);
Route::get('/logout', [SessiesController::class, 'kapot']);
