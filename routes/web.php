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




Route::get('/', 'MainController@index')->name('home')->middleware('auth');

Route::prefix('notebook/user')->group(function(){
	Route::get('logout', 'Auth\LoginController@logout');
	Auth::routes();	
});

Route::middleware('auth')->prefix('notebook')->group(function(){
	Route::get('create', 'MainController@create')->name('create');
	Route::post('new', 'MainController@new')->name('new');
	Route::get('update/{id}', 'MainController@update')->name('update');
	Route::post('edit/{id}', 'MainController@edit')->name('edit');
	Route::get('delete/{id}', 'MainController@delete')->name('delete');
});
