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

Route::get('/home', function () {
  if( Auth::user() )
      if( Auth::user()->hasRole('SuperAdmin')) //se valida el tipo de usuario
          return redirect('/SuperAdmin-home');
      elseif(Auth::user()->hasRole('Administrador'))
              return redirect('/Admin-home');
        elseif(Auth::user()->hasRole('Propietario'))
               return redirect('/Propietario-home');
          elseif(Auth::user()->hasRole('Encargado'))
                return redirect('/Encargado-home');

  else
      return redirect('/login');

});
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware'=> ['role:SuperAdmin']], function () {
      Route::get('SuperAdmin-home', 'SuperAdmin1\SuperAdmin1Controller@index');
      Route::resource('usuario-admin', 'SuperAdmin1\UsuarioController');
    //  Route::resource('usuario', 'SuperAdmin1\UsuarioController');

    });  
    Route::group(['middleware'=> ['role:Administrador']], function () {
      Route::get('Admin-home', 'SuperAdmin\SuperAdminController@index');
      Route::resource('tiponegocio', 'SuperAdmin\TipoNegocioController');
      Route::resource('negocio', 'SuperAdmin\NegocioController');
      Route::resource('sucursal', 'SuperAdmin\SucursalController');
      Route::resource('usuario', 'SuperAdmin\UsuarioController');

      Route::get('negocio/{id}', 'SuperAdmin\NegocioController@index');
    });

    Route::group(['middleware'=> ['role:Propietario']], function () {
      Route::get('Propietario-home', 'Propietario\PropietarioController@index');

    });  

    Route::group(['middleware'=> ['role:Encargado']], function () {
      Route::get('Encargado-home', 'Admin\AdminController@index');
      Route::resource('categoria', 'Admin\CategoriaController');
      Route::resource('detalle', 'Admin\DetalleController');
    });
  });

//Route::get('/categoria/action', 'Admin\CategoriaController@action')->name('categoria.action');







