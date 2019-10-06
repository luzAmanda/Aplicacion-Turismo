<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\TipoNegocio;
use App\Negocio;
use App\Http\Requests\NegocioRequest;
use DB;

class NegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cate = trim($request->get('cate'));
        $tipoNegocios=TipoNegocio::all();
        if($cate!==""){
            $negocios= Negocio::where('id_tiponegocio',$cate)->get();
        }
        
        
        return view('admin.negocio.index', compact('tipoNegocios','negocios','cate'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NegocioRequest $request)
    {
        try{
            $neg = new Negocio;
            $neg->nombre=trim($request->get('nombre'));
            $cate=trim($request->get('cate'));
            $neg->descripcion=trim($request->get('descripcion'));
           
            $neg->estado=1;
            
            $neg->id_tiponegocio=$cate;
          
           
           $neg->save();
            //Convertir la foto a Binario
          
            return redirect('negocio?cate='.$cate)->with('success','Negocio registrado con exito');
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
    public function update(NegocioRequest $request)
    {
        try{
            info($request);
            $neg=Negocio::findOrFail($request->id_negocio);
            $cate=trim($request->get('cate'));
            $neg->nombre=trim($request->get('nombre'));
            $neg->descripcion=trim($request->get('descripcion'));
            $neg->update();
            return redirect('negocio?cate='.$cate)->with('success','Negocio Actualizado con exito');
           
          //  return redirect('negocio?cate='.$cate.'/regions')->with('success','Negocio Actualizado con exito');
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()])->withInput();
        }
    }
    public function updateModal(NegocioRequest $request)
    {
        try{
            dd($request);
            info($request);
            print_r|($request);
            $neg=Negocio::findOrFail($request->get('id_negocio'));
           // $cate=trim($request->get('cate'));
            $neg->nombre=trim($request->get('nombre'));
            $neg->descripcion=trim($request->get('descripcion'));
            $neg->update();
            return redirect('negocio')->with('success','Negocio Actualizado con exito');
           
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
            $neg=Negocio::findOrFail($id);
            $cate=trim($request->get('cate'));
            $neg->nombre=trim($request->get('nombre'));
           $neg->estado=0;
           $neg->update();
            return redirect('negocio?cate='.$cate)->with('success', 'Negocio eliminado');
        } catch (Exception $e) {
            return back()->withErrors(['exception' => $e->getMessage()]);
        }
    }
}
