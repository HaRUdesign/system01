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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// ユーザー関連
Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/add', 'UserController@add')->name('user.add');
Route::post('/user/add', 'UserController@create')->name('user.create');
Route::get('/user/confirm', "UserController@confirm")->name("user.confirm");
Route::post('/user/confirm', "UserController@send")->name("user.send");
Route::get('/user/thanks', "UserController@complete")->name("user.complete");

// 管理者関連
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/add', 'AdminController@add')->name('admin.add');
Route::post('/admin/add', 'AdminController@create')->name('admin.create');
Route::get('/admin/confirm', "AdminController@confirm")->name("admin.confirm");
Route::post('/admin/confirm', "AdminController@send")->name("admin.send");
Route::get('/admin/thanks', "AdminController@complete")->name("admin.complete");
