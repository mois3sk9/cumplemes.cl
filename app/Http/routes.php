<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
  'uses' => 'HomeController@index',
  'as'  => 'home'
  ]);

/*Route::get('lugares',[
  'uses' => 'LugaresController@index',
  'as' => 'lugares'
  ]);*/

Route::get('productos/show/{id}', [
		'uses' =>'ProductosController@show',
		'as' => 'productos/show'
]);

// Authentication routes...
Route::get('auth/login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'login'
]);

Route::post('auth/login', [
    'uses' => 'Auth\AuthController@postLogin',
    'as' => 'iniciarSesion'
]);

Route::get('auth/logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'salir'
]);

// Registration routes...
Route::get('auth/register', [
    'uses' => 'Auth\AuthController@getRegister',
    'as' => 'registrarUsuario'
]);
Route::post('auth/register', [
    'uses' => 'Auth\AuthController@postRegister',
    'as' => 'guardarUsuario'
]);

Route::resource('carrito', 'CarritoController');
