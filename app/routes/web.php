<?php

use Illuminate\Support\Facades\Route;

// ユーザー
Route::get('user/auth/register','User\Auth\RegisterController@showRegistrationForm');
Route::post('user/auth/confirm','User\Auth\RegisterController@getRegistration')->name('user.confirm');
Route::post('user/auth/complete','User\Auth\RegisterController@register')->name('user.register');

Route::get('user/auth/login','User\Auth\LoginController@showLoginForm');
Route::post('user/auth/login','User\Auth\LoginController@authenticate')->name('user.login');

Route::get('user/home','User\HomeController@index')->name('user.home');



//     // ログイン認証後
//     Route::middleware('auth:user')->group(function () {

//         // TOPページ
//         Route::resource('home', 'HomeController', ['only' => 'index']);

//     });
// });

Route::get('/', function(){
    Auth::logout();
    session()->flush();
});
