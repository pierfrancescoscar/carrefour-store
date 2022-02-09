<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

// Authentication routes
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('/products', 'ProductController');
});

// Product Detail Route
Route::resource('/products', 'ProductController');

// Any route
Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');
