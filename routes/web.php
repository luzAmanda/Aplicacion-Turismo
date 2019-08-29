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

Route::get('/', 'InicioController@index') ;
//Route::get('admin/dishes', 'Admin\DishesController@index');
Route::resource('admin/dishes', 'Admin\DishesController');
Route::resource('admin/drinks', 'Admin\\DrinksController');
//Route::post('admin/menu-platos', 'Admin\\DishesController@store')->name('guardar-plato');
//Route::post('admin/dishes', 'Admin\DishesController@store')->name('save_menu');