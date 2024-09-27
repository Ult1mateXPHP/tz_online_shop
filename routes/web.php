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

Route::group(['namespace' => 'App\Http\Controllers\ShopCart'], function() {
   Route::get('/shopcart', 'ShopCartController@index');
   Route::post('/shopcart', 'ShopCartController@addNew');
});
