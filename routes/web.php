<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);

Route::get('login', [\App\Http\Controllers\AuthController::class,'showLoginForm']);
Route::post('login', [\App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::middleware('auth')->post('logout', [\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
Route::get('admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');

Route::middleware('auth')->prefix('admin')->group(function(){
    
    Route::resource('users',\App\Http\Controllers\Admin\UserController::class);
    Route::resource('categories',\App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('posts',\App\Http\Controllers\Admin\PostController::class);

});
Route::get('/category', function () {
    return view('frontend.category');
})->name('news-category');
    Route::get('/author', function () {
        return view('frontend.author');
    })->name('news-author');
    Route::get('/search', function () {
        return view('frontend.search');
    })->name('news-search');
    Route::get('/single', function () {
        return view('frontend.single');
    })->name('news-single');



