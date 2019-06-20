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

Auth::routes();

// 登入後頁面
Route::get('/home', 'HomeController@index')->name('home');
// 關於我們
Route::get('/about', 'HomeController@about')->name('about');
// 首頁
Route::get('/', 'PostController@index')->name('index');
// 文章頁面
Route::get('posts/{post}', 'PostController@show')->name('post.show');
// 新增文章
Route::get('create', 'PostController@create')->name('post.create');
// 編輯文章
Route::get('posts/{post}/edit', 'PostController@edit')->name('post.edit');
// 新建文章
Route::post('posts', 'PostController@store')->name('post.store');
// 更新文章
Route::put('posts/{post}', 'PostController@update')->name('post.update');
// 刪除文章
Route::delete('posts/{post}', 'PostController@destroy')->name('post.delete');