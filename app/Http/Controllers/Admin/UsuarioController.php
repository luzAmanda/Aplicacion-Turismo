<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\UsuarioRequest;

use App\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $usuarios=User::where('estado',1)->orderBy('updated_at')->get();
           // if($usuarios==!""){
                view('admin.tiponegocio.index',compact('usuarios'));
           // }
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()])->withInput();
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
            $neg->estado=1;
            return redirect('usuario')->with('success',' Usuario registrado con exito');
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()])->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(UsuarioRequest $request, $id)
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
            return redirect('usuario')->with('success','Usuario Actualizado con exito');
           
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
            return redirect('usuario')->with('success', 'Usuario eliminado');
        } catch (Exception $e) {
            return back()->withErrors(['exception' => $e->getMessage()]);
        }
    }
}
