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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/', 'PostController@index')->name('index');
Route::get('posts/{post}', 'PostController@show')->name('post');
Route::get('create', 'PostController@create')->name('post.create');
Route::get('posts/{post}/edit', 'PostController@edit')->name('post.edit');
Route::post('posts', 'PostController@store');
Route::put('posts/{post}', 'PostController@update');
Route::delete('posts/{post}', 'PostController@destroy')->name('post.delete');