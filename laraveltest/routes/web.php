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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypage', 'MyPageController@mypage');

Route::get('/mypage/add', 'MyPageController@add');
Route::post('/mypage/add', 'MyPageController@create');

Route::get('/mypage/edit', 'MyPageController@edit');
Route::post('/mypage/edit', 'MyPageController@update');

Route::get('/mypage/delete', 'MyPageController@delete');
Route::post('/mypage/delete', 'MyPageController@remove');

