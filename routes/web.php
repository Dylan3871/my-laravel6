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
//ruta desde funtion
Route::get('/', function () {
    return "Hola mundo desde la ruta 1";
});
//ruta de mipag
Route::get('/',function () {
    return view('mipag');
});  
//Ruta de productos
Route::get('/producto',function () {
    return view('productos/producto');
});
//Ruta de blade
Route::get('/miprimerl',function () {
    return view('child');
});