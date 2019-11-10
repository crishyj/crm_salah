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

Route::get('/', 'AnaController@index');
Route::post('/anapart', 'AnaController@create')->name('anapart.create');

Route::post('/', 'HomeController@create')->name('home.create');

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/admin', 'CustomerController@index')->name('customer.index');
Route::post('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/customer/edit', 'CustomerController@edit')->name('customer.edit');
Route::get('/customer/delete/{id}', 'CustomerController@delete')->name('customer.delete');
Route::get('/export', 'CustomerController@export')->name('customer.export');


Route::any('/link', 'LinkController@index')->name('link.index');
Route::post('/link.create', 'LinkController@create')->name('link.create');
Route::post('/link/edit', 'LinkController@edit')->name('link.edit');
Route::get('/link/delete/{id}', 'LinkController@delete')->name('link.delete');


