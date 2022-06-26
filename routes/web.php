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
    return view('frontend.index');
});
Route::get('/category', function () {
    return view('frontend.category');
});
Route::get('/author', function () {
    return view('frontend.author');
});
Route::get('/footer', function () {
    return view('frontend.footer');
});
Route::get('/header', function () {
    return view('frontend.header');
});
Route::get('/search', function () {
    return view('frontend.search');
});
Route::get('/sidebar', function () {
    return view('frontend.sidebar');
});
Route::get('/single', function () {
    return view('frontend.single');
});
Route::get('/welcome', function () {
    return view('welcome');
});
