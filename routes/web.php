<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [\App\Http\Controllers\PostController::class,'index'])->name('posts');

Route::get('/posts/create', [\App\Http\Controllers\PostController::class,'create'])->name('post.create');

Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class,'getById']);

Route::get('/registration', [\App\Http\Controllers\RegistrationController::class,'register_create']);
Route::post('/registration', [\App\Http\Controllers\RegistrationController::class,'register_store']);

Route::get('/login', [\App\Http\Controllers\RegistrationController::class,'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\RegistrationController::class,'login_check']);


Route::post('/logout', [\App\Http\Controllers\RegistrationController::class,'logout'])->name('logout');

Route::get('/mypost', [\App\Http\Controllers\PostController::class,'myPosts']);
