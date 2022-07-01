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
Auth::routes();

Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@login');
Route::middleware('auth')->post('logout','AuthController@logout');

Route::middleware('auth')->prefix('admin')->namespace('Admin')->group(function(){
    Route::resource('users','UserController');
    Route::resource('categories','CategoryController');
    Route::resource('posts','PostController');
});
Route::get('/category', function () {
    return view('frontend.category');
})->name('news-category');
    Route::get('/author', function () {
        return view('frontend.author');
    })->name('news-author');
    Route::get('/index', function () {
        return view('frontend.index');
    })->name('news-index');
    Route::get('/search', function () {
        return view('frontend.search');
    })->name('news-search');
    Route::get('/single', function () {
        return view('frontend.single');
    })->name('news-single');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
