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

Route::get('/pago', function () {
    return  "as";
});

*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/pago', 'khipuController@testCompra');

Route::get('/banco', 'khipuController@testBancos');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/crear', 'ProductoController@index');

Route::post('/home/crear', 'ProductoController@crear');

Route::get('/home/show/{id}', 'ProductoController@show');