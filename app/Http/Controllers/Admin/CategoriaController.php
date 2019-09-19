<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Http\Requests\CategoriaRequest;
use App\SucursalCategoria;
use DB;

class CategoriaController extends Controller
{

    public function index(Request $request)
    {
       // $categorias = Categoria::latest()->paginate(6);
       try{
        if ($request) {
            $query = trim($request->get('searchText'));
            $pag = trim($request->get('pag'));
            if ($pag== "") {  
                $pag=4;
            } 
            $categorias=DB::table('categorias')->
            where('nombre','LIKE','%'.$query.'%')->where('estado','=',1)
            ->orderBy('created_at')->paginate($pag);
    
      //  $categorias=Categoria::where('estado','=',1)->orderBy('created_at')->paginate($pag);
      
     // return view('admin.categoria.index', compact('categorias'));
     return view('admin.categoria.index',["categorias" =>$categorias,"searchText" => $query,"pag" => $pag]);

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
    public function store(CategoriaRequest $request)
    {
        try{
            $cat = new Categoria;
            $cat->nombre=trim($request->get('nombre'));
            $cat->icono=trim($request->get('icono'));
            $cat->estado=1;
            $cat->save();
           // $tablaintermedia= new SucursalCategoria();
//$tableintermedia->id_categoria=$cat->id_categoria;

            return redirect('categoria')->with('success','Categoria registrado con exito');
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
    public function update(CategoriaRequest $request)
    {
        try{
       $categoria=Categoria::findOrFail($request->id_categoria);
       $categoria->nombre=trim($request->get('nombre'));
       $categoria->icono=trim($request->get('icono'));
       $categoria->update();
       return redirect('categoria')->with('success','Categoria Actualizado con exito');
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
            $categoria=Categoria::findOrFail($id);
           // Categoria::destroy($id);
           $categoria->estado=0;
           $categoria->update();
            return redirect('categoria')->with('success', 'Categoría eliminada');
        } catch (Exception $e) {
            return back()->withErrors(['exception' => $e->getMessage()]);
        }
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('categorias')
         ->where('nombre', 'like', '%'.$query.'%')
       /*  ->orWhere('Address', 'like', '%'.$query.'%')
         ->orWhere('City', 'like', '%'.$query.'%')
         ->orWhere('PostalCode', 'like', '%'.$query.'%')
         ->orWhere('Country', 'like', '%'.$query.'%')
      */   ->orderBy('id_categoria', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('categorias')
         ->orderBy('id_categoria', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->nombre.'</td>
         <td>'.$row->icono.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td style="align:center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );
      echo json_encode($data);
     }
    
}

}
