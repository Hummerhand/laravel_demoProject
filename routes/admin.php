<?php

use Illuminate\Support\Facades\Route;


Route::middleware('guest:admin')->group(function() {

    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'index'])->name('admin.login');

    Route::post('/login_process', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login_process');
});


Route::middleware('auth:admin')->group(function () {

   Route::get('logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');


   Route::get('/posts', [\App\Http\Controllers\Admin\PostController::class, 'index'])->name('admin.posts.index');

   Route::get('/posts/create', [\App\Http\Controllers\Admin\PostController::class, 'create'])->name('admin.posts.create');

   Route::post('/posts/store', [\App\Http\Controllers\Admin\PostController::class, 'store'])->name('admin.posts.store');

   Route::get('/posts/{post}', [\App\Http\Controllers\Admin\PostController::class, 'show'])->name('admin.posts.show');

   Route::get('/posts/{post}/edit', [\App\Http\Controllers\Admin\PostController::class, 'edit'])->name('admin.posts.edit');

   Route::put('/posts/{post}', [\App\Http\Controllers\Admin\PostController::class, 'update'])->name('admin.posts.update');

   Route::delete('/posts/{post}', [\App\Http\Controllers\Admin\PostController::class, 'delete'])->name('admin.posts.delete');


   Route::get('/services', [\App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('admin.services.index');

   Route::get('/services/create', [\App\Http\Controllers\Admin\ServiceController::class, 'create'])->name('admin.services.create');

   Route::post('/services/store', [\App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('admin.services.store');

   Route::get('/services/{service}', [\App\Http\Controllers\Admin\ServiceController::class, 'show'])->name('admin.services.show');

   Route::get('/services/{service}/edit', [\App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('admin.services.edit');

   Route::put('/services/{service}', [\App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('admin.services.update');

   Route::delete('/services/{service}', [\App\Http\Controllers\Admin\ServiceController::class, 'delete'])->name('admin.services.delete');


   Route::get('/photos', [\App\Http\Controllers\Admin\PhotoController::class, 'index'])->name('admin.photos.index');

   Route::get('/photos/create', [\App\Http\Controllers\Admin\PhotoController::class, 'create'])->name('admin.photos.create');

   Route::post('/photos/store', [\App\Http\Controllers\Admin\PhotoController::class, 'store'])->name('admin.photos.store');

   Route::get('/photos/{photo}', [\App\Http\Controllers\Admin\PhotoController::class, 'show'])->name('admin.photos.show');

   Route::get('/photos/{photo}/edit', [\App\Http\Controllers\Admin\PhotoController::class, 'edit'])->name('admin.photos.edit');

   Route::put('/photos/{photo}', [\App\Http\Controllers\Admin\PhotoController::class, 'update'])->name('admin.photos.update');

   Route::delete('/photos/{photo}', [\App\Http\Controllers\Admin\PhotoController::class, 'delete'])->name('admin.photos.delete');


   Route::get('/about', [\App\Http\Controllers\Admin\AboutController::class, 'index'])->name('admin.about.index');

   Route::get('/about/create', [\App\Http\Controllers\Admin\AboutController::class, 'create'])->name('admin.about.create');

   Route::post('/about/store', [\App\Http\Controllers\Admin\AboutController::class, 'store'])->name('admin.about.store');

   Route::get('/about/{about}', [\App\Http\Controllers\Admin\AboutController::class, 'show'])->name('admin.about.show');

   Route::get('/about/{about}/edit', [\App\Http\Controllers\Admin\AboutController::class, 'edit'])->name('admin.about.edit');

   Route::put('/about/{about}', [\App\Http\Controllers\Admin\AboutController::class, 'update'])->name('admin.about.update');

   Route::delete('/about/{about}', [\App\Http\Controllers\Admin\AboutController::class, 'delete'])->name('admin.about.delete');
});




