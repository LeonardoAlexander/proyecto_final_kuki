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

//Route::get('/', function () {
//    return view('layout');
//});
Route::get('/', 'Web\administrador\AdministradorController@index');
Route::get('/admin', 'Web\administrador\AdministradorController@index');

Route::get('/listaventa', 'Web\administrador\AdministradorController@ventalista');
Route::get('/nuevaventa', 'Web\administrador\AdministradorController@ventanueva');

Route::get('/productos','ProductoController@index');
Route::get('/listaproducto', 'Web\administrador\AdministradorController@productolista');
Route::get('/nuevoproducto', 'Web\administrador\AdministradorController@productocrear');
Route::post('/nuevoproducto', 'ProductoController@store');
//Route::get('/administrator', 'Web\Administrator\DashController@paneladmin');