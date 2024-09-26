<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Overview'], function() {
    Route::get('/', 'MainPageController@index')->middleware('auth');
});

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function() {
    Route::get('/login', 'LoginController@index')->name('auth.login');
    Route::post('/login', 'LoginController@enter');
    Route::get('/logout', 'LogoutController@index')->name('auth.logout');
});
