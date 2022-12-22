<?php

use Illuminate\Support\Facades\Route;
 
use \App\Http\Controllers\PostController;
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

Route::get('/post',[PostController::class,'index']);
Route::get('/post/create',[PostController::class,'create']);
Route::post('/post/store',[PostController::class,'store']);
Route::get('/post/edit/{id}',[PostController::class,'edit']);
Route::get('post/{id}/{slug}',[PostController::class,'baca']);
Route::post('/post/update/{id}',[PostController::class,'update']);
Route::get('/post/hapus/{id}',[PostController::class,'hapus']);
