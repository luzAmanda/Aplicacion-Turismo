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

Route::get('/', function () {
  return view('welcome');
});


Route::group(['middleware'=> ['role:SuperAdmin']], function () {
  Route::get('home', 'SuperAdmin\SuperAdminController@index');

Route::resource('tiponegocio', 'SuperAdmin\TipoNegocioController');
Route::resource('negocio', 'SuperAdmin\NegocioController');
Route::resource('sucursal', 'SuperAdmin\SucursalController');
Route::resource('usuario', 'SuperAdmin\UsuarioController');
Route::get('negocio/{id}', 'SuperAdmin\NegocioController@index');



Route::resource('categoria', 'Admin\CategoriaController');
Route::resource('detalle', 'Admin\DetalleController');

});

Route::get('/categoria/action', 'Admin\CategoriaController@action')->name('categoria.action');



Auth::routes();



