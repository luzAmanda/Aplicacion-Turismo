<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Sector;
use App\TipoNegocio;
use App\Http\Requests\TipoNegocioRequest;
use Illuminate\Support\Facades\Log;
use DB;

class TipoNegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTNegocios(Request $request){ 
        if($request->ajax()){
                Log::debug($request->sector_id);
            $tnegocios=TipoNegocio::where('id_sector',$request->sector_id)->get();
            foreach($tnegocios as $tnegocio){
                $tnegociosArray[$tnegocio->id_tiponegocio]=$tnegocio->nombre;
            }
            return response()->json($tnegociosArray);
        }
    }
    public function index(Request $request)
    {
       try{
       
        //    if($cate!==""){  
            $pag = trim($request->get('pag'));
            $cate1 = trim($request->get('cate1'));
            if ($pag== "") {  
                $pag=3;
            }          
           $sectores=Sector::all();
            $tipoNegocios=DB::table('tipo_negocio')->where('id_sector','=',$cate1)->
          where('estado','=',1)
          ->orderBy('updated_at','asc')
            ->paginate($pag);
      //  }
      //  $categorias=Categoria::where('estado','=',1)->orderBy('created_at')->paginate($pag);
      
     // return view('admin.categoria.index', compact('categorias'));
     return view('admin.tipoNegocio.index',["tipoNegocios" =>$tipoNegocios,
     "sectores"=>$sectores, "pag"=>$pag,"cate1"=>$cate1
   ]);

      //return view('usuarios.index', ["usuarios"  => $usuarios,"searchText" => $query,"pag" => $pag]);    
        
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
