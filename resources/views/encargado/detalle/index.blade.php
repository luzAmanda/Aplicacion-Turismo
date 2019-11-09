@extends("theme.crui.layout")
    @section("titulo")
      Lista
    @endsection
   
     @section("contenid")
     @include('encargado/detalle/createModal')
     @include('encargado/detalle/delete')
  
     
<div><br></div>
     <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-edit"></i>Categoria - Productos
            </div>
            <div class="card-body">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                    <div class="row">
                            <div class="col-lg-4">
                                </div> 
                        <div class="col-lg-4">
                            <fieldset class="form-group" data-select2-id="152">
                                    <label>Seleccione Categoría</label>
                                    <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true"
                                    onchange="javascript:handleSelect1(this)">
                                        <option data-select2-id="141" disabled >Seleccione.. </option>
                                   
                                        @foreach($categorias as $cat)

                                            <option data-select2-id="141" value="detalle?cate={{$cat->id_categoria}}"
                                                    <?php  if ($cate== $cat->id_categoria)  {  echo 'selected'; }?>
                                                >{{$cat->nombre}}</option>
                                   
                                        @endforeach
                                    </select><span class="select2 select2-container select2-container--bootstrap select2-container--below select2-container--focus" dir="ltr" data-select2-id="140" style="width: 487.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select2-1-container"><span class="select2-selection__rendered" id="select2-select2-1-container" role="textbox" aria-readonly="true" title="Option 3">
                                               </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </fieldset>
                        </div>
                        
                        <div class="col-lg-4">
                            </div>    




                    </div> 
                    
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter">

                                    @include('encargado/detalle.search')
                           
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="card-header-actions">
                                <span class="fa fa-cicle-o"></span> 
                                    <a href="" class="btn btn-primary Active" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#createDetalleModal">
                                        <span class="fa fa-plus-square"></span> Nuevo
                                    </a>     
                            </div>
                        </div>
                    </div>
                        @include('layouts.messages')   
                        
                    <br>    
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 170px;">Nombre</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 201px;">Descripción</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 150px;">Precio</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 200px;">Foto</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 209px;">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        
                                                @if(isset($detalles))
                                                @foreach ($detalles->detalles as $det)
                                                
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{$det->nombre}}</td>
                                                    <td class="sorting_1">{{$det->descripcion}}</td>
                                                    <td class="sorting_1">{{$det->precio}}</td>
                                                    <td>
                                                            @if($det->foto == null)
                                                                
                                                            @else
                                                                <img src="{{ "data:image/" . $det->tipo_foto . ";base64," . $det->foto }}" style="max-width:75px;">
                                                            @endif
                                                    </td>
                                                    
                                                    <td>    
                                                    
                                                         <a href="" class="btn btn-warning btn-xs " data-backdrop="static" data-keyboard="false"
                                                        data-id_detalle="{{$det->id_detalle}}" data-nombre="{{$det->nombre}}" data-icono="{{$det->descripcion}}"
                                                        data-icono="{{$det->precio}}" data-icono="{{$det->estado}}" data-toggle="modal" data-target="#editDetalleModal"  >
                                                        <i class="fa fa-pencil-square-o"  aria-hidden="true"></i>  
                                                        </a>
                
                                                        <a title="Eliminar" data-toggle="modal" data-target="#deleteDetalleModal" 
                                                        data-action="{{route('detalle.destroy',$det->id_detalle)}}"
                                                                    data-nombre="{{$det->nombre}}" href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                       
                                                    </td>
                                                </tr>
                                                
                                        @endforeach
                                        @endif

                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection