<?php

namespace App\Http\Controllers\Encargado;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DetalleRequest;
use App\Categoria;
use App\Detalle;
use App\SucursalCategoria;
use Intervention\Image\ImageManagerStatic as Image;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cate = trim($request->get('cate'));
        $categorias=Categoria::all();
        if($cate!==""){
            $detalles=  Categoria::with('detalles')->find($cate);
        }
        
        
        return view('encargado.detalle.index', compact('categorias','detalles','cate'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encargado.detalle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DetalleRequest $request)
    {
        try{
            $det = new Detalle;
            $det->nombre=trim($request->get('nombre'));
            $det->descripcion=trim($request->get('descripcion'));
            $det->precio=trim($request->get('precio'));
            $det->foto=trim($request->get('foto'));
            $det->estado=1;
            
            $det->id_sucursalcategoria=17;
          
           
            $det->save();
            //Convertir la foto a Binario
            if ($request->hasFile('foto')) {
                $image = $request->file( 'foto' );
                $imageType = $image->getClientOriginalExtension();
                $imageStr = (string) Image::make( $image )->
                                        resize( null, 300, function ( $constraint ) {
                                            $constraint->aspectRatio();
                                        })->encode( $imageType );
                $det->foto = base64_encode( $imageStr );
                $det->tipo_foto = $imageType;
                $det->save();
            }else{
                return back()->withErrors(['exception'=>"Seleccione una imagen"])->withInput();
            }
            return redirect('detalle')->with('success','Producto registrado con exito');
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
    public function update(DetalleRequest $request)
    {
        try{
            $detalle=Detalle::findOrFail($request->id_detalle);
            $detalle->nombre=trim($request->get('nombre'));
            $detalle->descripcion=trim($request->get('descripcion'));
            $detalle->precio=trim($request->get('precio'));
            if ($request->hasFile('foto')) {
                $image = $request->file( 'foto' );
                $imageType = $image->getClientOriginalExtension();
                $imageStr = (string) Image::make( $image )->
                                        resize( 300, null, function ( $constraint ) {
                                            $constraint->aspectRatio();
                                        })->encode( $imageType );
                $detalle->foto = base64_encode( $imageStr );
                $detalle->tipo_foto = $imageType;
                $detalle->save();
            }else{
                return back()->withErrors(['exception'=>"Seleccione una imagen"])->withInput();
            }
            $detalle->update();
            return redirect('detalle')->with('success','Detalle Actualizado con exito');
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
    public function destroy($id)
    {
        try {
            $detalle=Detalle::findOrFail($id);
           // Categoria::destroy($id);
           $detalle->estado=0;
           $detalle->update();
            return redirect('detalle')->with('success', 'Detalle eliminada');
        } catch (Exception $e) {
            return back()->withErrors(['exception' => $e->getMessage()]);
        }
    }
}
