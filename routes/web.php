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

Route::get('/', 'pagesController@index');
Route::get('/year/{year}', 'pagesController@show');

Route::get('/admin', 'adminController@index');
Route::post('/admin', 'adminController@store');
Route::get('/admin/create', 'adminController@create');
Route::get('/admin/{id}/edit', 'adminController@edit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
