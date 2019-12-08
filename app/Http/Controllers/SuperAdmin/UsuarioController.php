<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use DB;
use Illuminate\Database\QueryException;


use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            if ($request) {
                $query = trim($request->get('searchText'));
                $pag = trim($request->get('pag'));
                if ($pag=="") {  
                    $pag=5;
                }    
        $usuarios = DB::table('users as usu')->join('role_user as ru', 'usu.id', '=', 'ru.user_id')->join('roles as r', 'ru.role_id', '=', 'r.id')
                ->orWhere('usu.nombre', 'ILIKE', '%' . $query . '%')
                ->orWhere('usu.correo', 'ILIKE', '%' . $query . '%')
                ->orWhere('usu.cedula', 'ILIKE', '%' . $query . '%')
                ->orderby('usu.updated_at','desc')
                ->paginate($pag);
            if($request->display=="todos"){
                $usuarios = DB::table('users as usu')
                ->join('role_user as ru', 'usu.id', '=', 'ru.user_id')
                ->join('roles as r', 'ru.role_id', '=', 'r.id')
                ->orWhere('usu.nombre', 'ILIKE', '%' . $query . '%')
                ->orWhere('usu.correo', 'ILIKE', '%' . $query . '%')
                ->orWhere('usu.cedula', 'ILIKE', '%' . $query . '%')
                ->orderby('usu.updated_at','desc')
                ->paginate($pag);
            } else if($request->display == "SuperAdmin"){
                $usuarios = DB::table('users as usu')
                ->join('role_user as ru', 'usu.id', '=', 'ru.user_id')
                ->join('roles as r', 'ru.role_id', '=', 'r.id')
                ->orWhere('usu.nombre', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','1')
                ->orWhere('usu.correo', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','1')
                ->orWhere('usu.cedula', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','1')
                ->orderby('usu.updated_at','desc')
                ->paginate($pag);
            } else if($request->display == "Administrador"){
                $usuarios = DB::table('users as usu')
                ->join('role_user as ru', 'usu.id', '=', 'ru.user_id')
                ->join('roles as r', 'ru.role_id', '=', 'r.id')
                ->orWhere('usu.nombre', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','2')
                ->orWhere('usu.correo', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','2')
                ->orWhere('usu.cedula', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','2')
                ->orderby('usu.updated_at','desc')
                ->paginate($pag);
            } else if($request->display == "Encargado"){
                $usuarios = DB::table('users as usu')
                ->join('role_user as ru', 'usu.id', '=', 'ru.user_id')
                ->join('roles as r', 'ru.role_id', '=', 'r.id')
                ->orWhere('usu.nombre', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','4')
                ->orWhere('usu.correo', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','4')
                ->orWhere('usu.cedula', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','4')
                ->orderby('usu.updated_at','desc')
                ->paginate($pag);   
            }
         else if($request->display == "Propietario"){
            $usuarios = DB::table('users as usu')
            ->join('role_user as ru', 'usu.id', '=', 'ru.user_id')
            ->join('roles as r', 'ru.role_id', '=', 'r.id')
            ->orWhere('usu.nombre', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','3')
            ->orWhere('usu.correo', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','3')
            ->orWhere('usu.cedula', 'ILIKE', '%' . $query . '%')->where('ru.role_id','=','3')
            ->orderby('usu.updated_at','desc')
            ->paginate($pag);   
        }
       // dd($usuarios);
        return view('superAdmin.usuario.index',["usuarios"  => $usuarios,"searchText" => $query,"pag" => $pag]);
        }
    }catch (\Exception $e) {
        return back()->withErrors(['exception' => $e->getMessage()])->withInput();
    }
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
    public function store(UsuarioRequest $request)
    {
        
        try{
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
            return redirect('usuario-sadmin')->with('success',' Usuario registrado con exito');
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()])->withInput();
        }
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
        try{
            info($request);
            $neg=Usuario::findOrFail($request->id_usuario);
            $neg->nombre=trim($request->get('cedula'));
            $neg->nombre=trim($request->get('nombre'));
            $neg->nombre=trim($request->get('apellido'));
         //   $cate=trim($request->get('cate'));
            $neg->celular=trim($request->get('celular'));
            $neg->telefono=trim($request->get('telefono'));
            $neg->direccion=trim($request->get('direccion'));
            $neg->correo=trim($request->get('correo'));
            $neg->update();
            return redirect('usuario-sadmin')->with('success','Usuario Actualizado con exito');
           
          //  return redirect('negocio?cate='.$cate.'/regions')->with('success','Negocio Actualizado con exito');
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        try {
            $neg=Usuario::findOrFail($id);
           // $cate=trim($request->get('cate'));
            $neg->nombre=trim($request->get('nombre'));
           $neg->estado=0;
           $neg->update();
            return redirect('usuario-sadmin')->with('success', 'Usuario eliminado');
        } catch (Exception $e) {
            return back()->withErrors(['exception' => $e->getMessage()]);
        }
    }
}
