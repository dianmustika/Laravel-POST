<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use \App\Http\Controllers\PostController;
use \App\Http\Controller\Auth\LoginController;
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
Route::post('/post/update/{id}',[PostController::class,'update']);
Route::get('/post/hapus/{id}',[PostController::class,'hapus']);

//Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
//Route::post('/login', [AdminController::class, 'login']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/login', 'Auth\LoginController@authenticate')->name('login');
