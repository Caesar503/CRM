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
//首页
Route::any('/index','LoginController@index')->middleware('login');

// 登录注册
Auth::routes();
Route::get('/home', 'LoginController@index')->name('home');
//退出
Route::any('/back','LoginController@back');

//综合查询
Route::any('/allFind','LoginController@allFind');
