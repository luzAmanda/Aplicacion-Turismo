<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;

use App\Http\Requests\UsuarioRequest;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
 
        $roles=Role::all();
        return view('superAdmin.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      /*  try{
            $neg = new User;
            $neg->cedula=trim($request->get('cedula'));
            $neg->nombre=trim($request->get('nombre'));
            $neg->apellido=trim($request->get('apellido'));
         //   $cate=trim($request->get('cate'));
            $neg->celular=trim($request->get('celular'));
            $neg->telefono=trim($request->get('telefono'));
            $neg->direccion=trim($request->get('direccion'));
            $neg->correo=trim($request->get('correo'));
            $neg->password=('12345678');
            $neg->estado=1;
            $neg->save();
            
            $neg->roles()->attach(Role::where('name', 'Administrador')->first());
            return redirect('usuario-admin')->with('success',' Usuario registrado con exito');
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()])->withInput();
        }
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
