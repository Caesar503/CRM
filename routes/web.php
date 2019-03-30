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

//Route::get('/', function () {
//    return view('welcome');
//});
//首页
Route::get('/','IndexController@index');
//客户服务添加
Route::get('client/create','ClientServerController@create');
//客户服务添加执行
Route::post('client/serverdo','ClientServerController@store');
//客户服务展示
Route::get('client/list','ClientServerController@index');
//客户服务删除
Route::get('client/delete/{id}','ClientServerController@destroy');
//客户服务修改
Route::get('client/edit/{id}','ClientServerController@edit');
Route::post('client/update','ClientServerController@update');