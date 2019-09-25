@extends("theme.crui.layout")
    @section("titulo")
      Lista
    @endsection
   
     @section("contenid")
     @include('superAdmin/negocio/createModal')
     @include('superAdmin/negocio/editModal')
     @include('superAdmin/negocio/delete')
  
     
<div><br></div>
     <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-edit"></i>Negocios
            </div>
            <div class="card-body">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                    <div class="row">
                            <div class="col-lg-4">
                                </div> 
                        <div class="col-lg-4">
                            <fieldset class="form-group" data-select2-id="152">
                                    <label>Seleccione Tipo de negocio</label>
                                    <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true"
                                    onchange="javascript:handleSelect2(this)">
                                        <option data-select2-id="141" disabled >Seleccione.. </option>
                                   
                                        @foreach($tipoNegocios as $tn)

                                            <option data-select2-id="141" value="negocio?cate={{$tn->id_tiponegocio}}"
                                                    <?php  if ($cate== $tn->id_tiponegocio)  {  echo 'selected'; }?>
                                                >{{$tn->nombre}}</option>
                                   
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

                                    @include('superAdmin/tiponegocio.search')
                           
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="card-header-actions">
                                <span class="fa fa-cicle-o"></span> 
                                    <a href="" class="btn btn-primary Active" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#createNegocioModal">
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
                                       
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 209px;">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        
                                                @if(isset($negocios))
                                                @foreach ($negocios as $det)
                                                
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{$det->nombre}}</td>
                                                    <td class="sorting_1">{{$det->descripcion}}</td>
                                                    
                                                   
                                                    
                                                    <td>    
                                                    
                                                         <a href="" class="btn btn-warning btn-xs " data-backdrop="static" data-keyboard="false"
                                                        data-id_negocio="{{$det->id_negocio}}" data-nombre="{{$det->nombre}}" data-cate="{{$cate}}" 
                                                        data-estado="{{$det->estado}}" data-descripcion="{{$det->descripcion}}" data-toggle="modal" data-target="#editNegocioModal"  >
                                                        <i class="fa fa-pencil-square-o"  aria-hidden="true"></i>  
                                                        </a>
                
                                                        <a title="Eliminar" data-toggle="modal" data-target="#deleteNegocioModal" 
                                                        data-action="{{route('negocio.destroy',$det->id_negocio)}}" data-cate="{{$cate}}" 
                                                                    data-nombre="{{$det->nombre}}" href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>

                                                        <a href="sucursal?cate={{$det->id_negocio}}"
                                                                class="btn  btn-outline-primary"><i class="fa fa-plus" aria-hidden="true">Agregar Sucursal</i>
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