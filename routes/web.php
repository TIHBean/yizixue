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


Route::get('/user/get', 'UserController@GetAll');
Route::get('/post/get', 'PostController@GetAll');

Auth::routes();

Route::get('/home/post', 'PostController@index')->name('post');
Route::post('/home/post/create', 'PostController@create')->name('create-post');
Route::get('/home', 'HomeController@index')->name('home');
