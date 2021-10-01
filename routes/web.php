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


/* USUARIOS */
/* index lista */
Route::get('/', 'UserController@index');
/* store guarda datos en BD */
Route::post('/users', 'UserController@store')->name('users.store');
/* Delete elima datos */
Route::delete('/users/{user}' ,'UserController@delete')->name('users.destroy');

/* Categorias */

Route::get('/category','CategoryController@index');
Route::post('/categories','CategoryController@store')->name('category.store');
Route::delete('/categories/{category}','CategoryController@delete')->name('category.destroy');
