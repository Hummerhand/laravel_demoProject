<?php

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


Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::get('/about', [\App\Http\Controllers\IndexController::class, 'about'])->name('about');


Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services.service');

Route::get('/services/{id}', [\App\Http\Controllers\ServiceController::class, 'show'])->name('services.show');


Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.post');

Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

/*
Route::get('/serviceRD', [\App\Http\Controllers\IndexController::class, 'serviceRDShow'])->name('serviceRD');
Route::get('/serviceED', [\App\Http\Controllers\IndexController::class, 'serviceEDShow'])->name('serviceED');
Route::get('/serviceOD', [\App\Http\Controllers\IndexController::class, 'serviceODShow'])->name('serviceOD');
*/


Route::get('/photos', [\App\Http\Controllers\PhotoController::class, 'index'])->name('photos.photo');

Route::get('/photos/{id}', [\App\Http\Controllers\PhotoController::class, 'show'])->name('photos.show');

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');

Route::get('/about/{id}', [\App\Http\Controllers\AboutController::class, 'show'])->name('about.about');


Route::middleware('guest')->group(function() {

    Route::get('/login', [\App\Http\Controllers\AuthUsersController::class, 'ShowLoginForm'])->name('login');

    Route::post('/login_process', [\App\Http\Controllers\AuthUsersController::class, 'login'])->name('login_process');

    Route::get('/register', [\App\Http\Controllers\AuthUsersController::class, 'ShowRegisterForm'])->name('register');

    Route::post('/register_process', [\App\Http\Controllers\AuthUsersController::class, 'register'])->name('register_process');

    Route::get('/forgot', [\App\Http\Controllers\AuthUsersController::class, 'ShowForgotForm'])->name('forgot');

    Route::post('/forgot_process', [\App\Http\Controllers\AuthUsersController::class, 'forgot'])->name('forgot_process');


    Route::post('/contact_process', [\App\Http\Controllers\IndexController::class, 'contact_process'])->name('contact_process');

    Route::post('/subscribe_process', [\App\Http\Controllers\IndexController::class, 'subscribe_process'])->name('subscribe_process');
});


Route::middleware('auth')->group(function () {

    Route::get('/logout', [\App\Http\Controllers\AuthUsersController::class, 'logout'])->name('logout');

    Route::post('posts/comment/{id}', [\App\Http\Controllers\PostController::class, 'comment'])->name('comment');
});

