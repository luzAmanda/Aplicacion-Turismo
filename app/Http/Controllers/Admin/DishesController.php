<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Dish;
use Illuminate\Http\Request;
use App\Http\Requests\ValidatorDish;
use Intervention\Image\ImageManagerStatic as Image;

class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
      /*  $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $dishes = Dish::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->orWhere('tipo_foto', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $dishes = Dish::latest()->paginate($perPage);
        }
*/
        $dishes=Dish::orderBy('id_plato')->get();
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ValidatorDish $request)
    {
      //  dd($request);

          //  Dish::create(
            //    $request->all()
           // );
           try{
            $dish = new Dish;
            $dish->nombre=trim($request->get('nombre'));
            $dish->descripcion=trim($request->get('descripcion'));
            $dish->foto=trim($request->get('foto'));
            $dish->precio=trim($request->get('precio'));
            $dish->estado=1;
            
            //Convertir la foto a Binario
            if ($request->hasFile('foto')) {
                $image = $request->file( 'foto' );
                $imageType = $image->getClientOriginalExtension();
                $imageStr = (string) Image::make( $image )->
                                        resize( 300, null, function ( $constraint ) {
                                            $constraint->aspectRatio();
                                        })->encode( $imageType );

                $dish->foto = base64_encode( $imageStr );
                $dish->tipo_foto = $imageType;
                $dish->save();
            }else{
                return back()->withErrors(['exception'=>"Seleccione una imagen"])->withInput();
            }
            return redirect('admin/dishes/create')->with('success','Plato registrado con exito');
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()])->withInput();
        }

           
          
  // return response()->json($request);
      //  return redirect('admin/menu')->with('flash_message', ' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $dish = Dish::findOrFail($id);

        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $dish = Dish::findOrFail($id);

        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $dish = Dish::findOrFail($id);
        $dish->update($requestData);

        return redirect('admin/dishes')->with('flash_message', 'Dish updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Dish::destroy($id);

        return redirect('admin/dishes')->with('flash_message', 'Dish deleted!');
    }
}
