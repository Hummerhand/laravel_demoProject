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


Route::middleware('auth')->group(function () {
    Route::post('/contact_process', [\App\Http\Controllers\IndexController::class, 'contact_process'])->name('contact_process');

    Route::post('/subscribe_process', [\App\Http\Controllers\IndexController::class, 'subscribe_process'])->name('subscribe_process');
});

