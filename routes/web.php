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

Route::name('index')->get('/','VistasController@index');
Route::name('rEmpresa')->get('/rEmpresa','VistasController@rEmpresa');
Route::name('flot')->get('/flot','VistasController@flot');
Route::name('morris')->get('/morris','VistasController@morris');
Route::name('historico')->get('/historico','VistasController@historico');
Route::name('obligaciones')->get('/obligaciones','VistasController@obligaciones');
Route::name('usuarios')->get('/usuarios','VistasController@usuarios');
Route::name('perfil')->get('/perfil','VistasController@perfil');

Route::name('rEmpre')->post('/rEmpres','VistasController@store');
Route::name('leer')->post('/leer','ComController@leer');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
