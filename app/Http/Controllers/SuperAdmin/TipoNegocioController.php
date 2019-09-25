<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\TipoNegocio;
use App\Http\Requests\TipoNegocioRequest;

use DB;

class TipoNegocioController extends Controller
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
            $cate = trim($request->get('cate'));
            if ($pag== "") {  
                $pag=4;
            } 
            if($cate!==""){           
            $sectores=Sector::all();
            $tipoNegocios=DB::table('tipo_negocio')->
            where('nombre','LIKE','%'.$query.'%')->where('estado','=',1)->where('id_tiponegocio',$cate)
            ->orderBy('updated_at')->paginate($pag);
        }
      //  $categorias=Categoria::where('estado','=',1)->orderBy('created_at')->paginate($pag);
      
     // return view('admin.categoria.index', compact('categorias'));
     return view('superAdmin.tipoNegocio.index',["tipoNegocios" =>$tipoNegocios,"searchText" => $query,
     "sectores"=>$sectores,"pag" => $pag]);

      //return view('usuarios.index', ["usuarios"  => $usuarios,"searchText" => $query,"pag" => $pag]);    
        } 
}catch (\Exception $e) {
    return back()->withErrors(['exception' => $e->getMessage()])->withInput();
}
    }

    public function create()
    {
        return view('admin.categoria.create');
    }
    public function createModal()
    {
        return view('admin.categoria.m');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoNegocioRequest $request)
    {
        try{
            $cat = new TipoNegocio();
            $cat->nombre=trim($request->get('nombre'));
            $cat->icono=trim($request->get('icono'));
            $cat->estado=1;
            $cat->save();
           // $tablaintermedia= new SucursalCategoria();
//$tableintermedia->id_categoria=$cat->id_categoria;

            return redirect('tiponegocio')->with('success','Sección registrado con exito');
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
    public function update(TipoNegocioRequest $request)
    {
       
       $tipoNegocios=TipoNegocio::findOrFail($request->id_tiponegocio);
       $tipoNegocios->nombre=trim($request->get('nombre'));
       $tipoNegocios->icono=trim($request->get('icono'));
       $tipoNegocios->update();
       return redirect('tiponegocio')->with('success','Sección Actualizado con exito');
  
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $tipoNegocios=TipoNegocio::findOrFail($id);
            
           // Categoria::destroy($id);
           $tipoNegocios->estado=0;
           $tipoNegocios->update();
            return redirect('tiponegocio')->with('success', 'Sección eliminada');
        } catch (Exception $e) {
            return back()->withErrors(['exception' => $e->getMessage()]);
        }
    }
}
