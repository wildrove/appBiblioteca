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

Route::get('/books', function() {
	$users = \App\User::paginate();



	return $users;
});

Route::get('admin/users', 'Admin\\UserController@index');

/*
	'first_name' => 'Admin',
		'last_name' => 'admin',
		'user_name' => 'admin',
		'birthday' => '1984-10-06',
		'user_type' => 'Administrator',
		'email' => 'admin@gmail.com',
		'cpf' => '12345678980',
		'password' => md5('12345678')

*/		
