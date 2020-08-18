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

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function (){

	Route::prefix('users')->name('users.')->group(function() {

		Route::get('/', 'UserController@index')->name('index');
		Route::get('/create', 'UserController@create')->name('create');
		Route::post('/store', 'UserController@user')->name('store');
		Route::get('{user}/edit', 'UserController@edit')->name('edit');
		Route::post('/update/{user}', 'UserController@update')->name('update');
		Route::get('/destroy/{user}', 'UserController@destroy')->name('destroy');

		});

	Route::prefix('books')->name('books.')->group(function() {

		Route::get('/', 'BookController@index')->name('index');
		Route::get('/create', 'BookController@create')->name('create');
		Route::post('/store', 'BookController@store')->name('store');
	});
});

Route::prefix('app')->name('app.')->namespace('App')->group(function(){

	Route::prefix('books')->name('books.')->group(function(){

		Route::get('/', 'AppController@index')->name('index');
	});
});

