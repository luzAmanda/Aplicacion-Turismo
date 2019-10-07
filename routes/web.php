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
      Route::get('SuperAdmin-home', 'SuperAdmin\SuperAdminController@index');
      Route::resource('rol', 'SuperAdmin\RolController');
      Route::resource('usuario-admin', 'SuperAdmin\UsuarioController');
      Route::resource('sector', 'SuperAdmin\SectorController');
    //  Route::resource('usuario', 'SuperAdmin1\UsuarioController');

    });  
    Route::group(['middleware'=> ['role:Administrador']], function () {
      Route::get('Admin-home', 'Admin\AdminController@index');
      Route::resource('tiponegocio', 'Admin\TipoNegocioController');
      Route::resource('negocio', 'Admin\NegocioController');
      Route::resource('sucursal', 'Admin\SucursalController');
      Route::resource('usuario', 'Admin\UsuarioController');

      Route::get('negocio/{id}', 'Admin\NegocioController@index');
    });

    Route::group(['middleware'=> ['role:Propietario']], function () {
      Route::get('Propietario-home', 'Propietario\PropietarioController@index');

    });  

    Route::group(['middleware'=> ['role:Encargado']], function () {
      Route::get('Encargado-home', 'Encargado\EncargadoController@index');
      Route::resource('categoria', 'Encargado\CategoriaController');
      Route::resource('detalle', 'Encargado\DetalleController');
    });
  });

Route::get('/categoria/action', 'Admin\CategoriaController@action')->name('categoria.action');







