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

//Route::get('admin/layout', function(){
  //  return view('admin.layout');
//}) ;
//Route::get('admin/dishes', 'Admin\DishesController@index');
Route::resource('home', 'Admin\HomeController');
//Route::resource('dishes', 'Admin\DishesController');
//Route::resource('create', 'Admin\DishesController');
//Route::resource('drinks', 'Admin\\DrinksController');

Route::resource('categoria', 'Admin\CategoriaController');
Route::resource('detalle', 'Admin\DetalleController');
Route::resource('tiponegocio', 'SuperAdmin\TipoNegocioController');
Route::resource('negocio', 'SuperAdmin\NegocioController');
Route::resource('sucursal', 'SuperAdmin\SucursalController');
Route::resource('usuario', 'SuperAdmin\UsuarioController');
Route::get('negocio/{id}', 'SuperAdmin\NegocioController@index');

//Route::resource('negocio/storeModal', 'SuperAdmin\NegocioController@storeModal');
//Route::resource('negocio-saveModal', 'superAdmin\NegocioController@storeModal');

//Route::get('/live_search', 'LiveSearch@index');
Route::get('/categoria/action', 'Admin\CategoriaController@action')->name('categoria.action');






//Route::post('admin/menu-platos', 'Admin\\DishesController@store')->name('guardar-plato');
//Route::post('admin/dishes', 'Admin\DishesController@store')->name('save_menu');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
