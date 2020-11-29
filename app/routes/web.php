<?php

use Illuminate\Support\Facades\Route;

// ユーザー
Route::prefix('user')->middleware('auth:user')->group(function () {
    Route::get('auth/register', 'User\Auth\RegisterController@showRegistrationForm');
    Route::post('auth', 'User\Auth\RegisterController@getRegistration')->name('user.register');

    Route::get('auth/confirm', 'User\Auth\RegisterController@confirm')->name('user.confirm');

     Route::get('auth/login', 'User\Auth\RegisterController@showLoginForm')->name('user.login');

});
