<?php

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

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('admin/blogs', function () {
        return view('admin.blog');
    });
    Route::resource('admin/category','Admin\CategoryController');
    Route::resource('admin/product','Admin\ProductController');
    Route::resource('admin/user','Admin\UserController');
});

Auth::routes(['register'=>false]);
