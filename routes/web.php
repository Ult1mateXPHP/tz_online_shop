<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Overview'], function() {
    Route::get('/', 'MainPageController@index')->middleware('auth');
});

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function() {
    Route::get('/login', 'LoginController@index')->name('auth.login');
    Route::post('/login', 'LoginController@login');
    Route::get('/register', 'RegisterController@index')->name('auth.register');
    Route::post('/register', 'RegisterController@register');
    Route::get('/logout', 'LogoutController@index')->name('auth.logout');
});

Route::group(['namespace' => 'App\Http\Controllers\Product'], function() {
    //Route::get('/product/generate/{count}', 'ProductController@generate');
});

Route::group(['namespace' => 'App\Http\Controllers\ShopCart'], function() {
   Route::get('/shopcart', 'ShopCartController@index')->middleware('auth');;
   Route::post('/shopcart', 'ShopCartController@addNew')->middleware('auth');;
});

Route::group(['namespace' => 'App\Http\Controllers\Orders'], function() {
    Route::get('/orders', 'OrderController@index')->middleware('auth');;
    Route::post('/orders', 'OrderController@addNew')->middleware('auth');;
});
