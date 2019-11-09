<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\TipoNegocio;
use App\Sucursal;
use App\Negocio;
use App\Sector;
use App\Http\Requests\SucursalRequest;
use Intervention\Image\ImageManagerStatic as Image;

use DB;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cate = trim($request->get('cate'));
        $cate1 = trim($request->get('cate1'));
        $sectores=Sector::all();
        $negocios=Negocio::all();
        
        if($cate!=="")
        {
            $sucursales= Sucursal::where('id_negocio',$cate)->where('estado',1)->get();
        }
        
        
        return view('admin.sucursal.index', compact('negocios','sucursales','cate','cate1','sectores'));
        $cate = trim($request->get('cate'));
        $cate1 = trim($request->get('cate1'));
      /*  // dd($cate);
        $cate1 = trim($request->get('cate1'));
        $sectores=Sector::all();
        
     //   $tipoNegocios=TipoNegocio::where('id_tiponegocio',1)->get();
          */
        if($cate1!==""){
            $negocios= Negocio::where('id_tiponegocio',$cate1)->get();
        }   
      //  return view('admin.negocio.index', compact('negocios','sectores','cate','cate1'));
      
        $sectorData['data'] = Page::getSector();
      
        // Load index view
      //  dd($sectorData);
     // session()->put('forms.tnegocio', $request->get('tnegocio'));
     // dd( session()->put('forms.tnegocio', $request->get('tnegocio')));
        return view('admin.negocio.index', compact('negocios','sectorData','cate','cate1'));
        

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
    public function store(SucursalRequest $request)
    {
        try{
            $neg = new Sucursal;
            $neg->nombre=trim($request->get('nombre'));
            $cate=trim($request->get('cate'));
            $neg->celular=trim($request->get('celular'));
            $neg->telefono=trim($request->get('telefono'));
            $neg->direccion=trim($request->get('direccion'));
            $neg->longitud=trim($request->get('longitud'));
            $neg->latitud=trim($request->get('latitud'));
            $neg->estado=1;
            $neg->id_negocio=$cate;
          
           
           $neg->save();
            //Convertir la foto a Binario
            if ($request->hasFile('foto')) {
                $image = $request->file( 'foto' );
                $imageType = $image->getClientOriginalExtension();
                $imageStr = (string) Image::make( $image )->
                                        resize( 300, null, function ( $constraint ) {
                                            $constraint->aspectRatio();
                                        })->encode( $imageType );
                $neg->foto = base64_encode( $imageStr );
                $neg->tipo_foto = $imageType;
                $neg->save();
            }else{
                return back()->withErrors(['exception'=>"Seleccione una imagen"])->withInput();
            }
          
            return redirect('sucursal?cate='.$cate)->with('success',' Sucursal registrado con exito');
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
    public function update(SucursalRequest $request)
    {
        try{
            info($request);
            $neg=Sucursal::findOrFail($request->id_sucursal);
            $cate=trim($request->get('cate'));
            $neg->nombre=trim($request->get('nombre'));
            $neg->descripcion=trim($request->get('descripcion'));
            $neg->update();
            return redirect('sucursal?cate='.$cate)->with('success','Sucursal Actualizado con exito');
           
          //  return redirect('negocio?cate='.$cate.'/regions')->with('success','Negocio Actualizado con exito');
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()])->withInput();
        }
    }
    public function updateModal(SucursalRequest $request)
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
            $neg=Sucursal::findOrFail($id);
            $cate=trim($request->get('cate'));
            $neg->nombre=trim($request->get('nombre'));
           $neg->estado=0;
           $neg->update();
            return redirect('sucursal?cate='.$cate)->with('success', 'Sucursal eliminado');
        } catch (Exception $e) {
            return back()->withErrors(['exception' => $e->getMessage()]);
        }
    }
}
