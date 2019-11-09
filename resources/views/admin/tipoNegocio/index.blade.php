@extends("theme.crui.layout")
    @section("titulo")
      Lista
    @endsection
   
     @section("contenid")
    
    @include('admin/tipoNegocio/createModal')
    @include('admin/tipoNegocio/editModal')
    @include('admin/tipoNegocio/delete')
    
<div><br></div>
     <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">    
                    <i class="fa fa-edit"></i>Sector-Tipo de negocio             
            </div>
        <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                        <div class="col-lg-4">
                        </div> 
                    <div class="col-lg-4">
                            <fieldset class="form-group" data-select2-id="152">
                                    <label>Seleccione Sector</label>
                                    <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true"
                                    onchange="javascript:handleSelect3(this)">
                                        <option data-select2-id="141" disabled >Seleccione.. </option>
                                        @foreach($sectores as $tn)
                                            <option data-select2-id="141" value="tiponegocio?cate1={{$tn->id_sector}}"
                                                    <?php  if ($cate1== $tn->id_sector)  {  echo 'selected'; }?>
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
                                    @include('admin/tipoNegocio.search')
                                    </div>     
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="card-header-actions">
                                     <span class="fa fa-cicle-o"></span> 
                                        <a href="" class="btn btn-primary Active" data-backdrop="static" data-keyboard="false"
                                        data-toggle="modal" data-target="#createTipoNegocioModal">
                                            <span class="fa fa-plus-square"></span> Nuevo
                                        </a>     
                                </div>
                            </div>
                        </div>
                    @include('layouts.messages')     
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">

                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 170px;">Nombre</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 201px;">icon</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 209px;">Opción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($tipoNegocios))
                                @foreach ($tipoNegocios as $tn)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$tn->nombre}}</td>
                                    <td>
                                        <img style="width: 30px; height: 30px;" src='svg/education/{{$tn->icono}}.svg'>
                                    </td>
                                    <td>    
                                        <a href="" class="btn btn-warning btn-xs " data-backdrop="static" data-keyboard="false"
                                        data-id_tiponegocio="{{$tn->id_tiponegocio}}" data-nombre="{{$tn->nombre}}" data-icono="{{$tn->icono}}" data-toggle="modal" data-target="#editTipoNegocioModal"  >
                                        <i class="fa fa-pencil-square-o"  aria-hidden="true"></i>  
                                        </a>

                                        <a title="Eliminar" data-toggle="modal" data-target="#modalDelete" 
                                        data-action="{{route('tiponegocio.destroy',$tn->id_tiponegocio)}}"
                                                    data-nombre="{{$tn->nombre}}" href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    
                                       
                                      <!-- <a  href="{{url('negocio1', ['cate' => $tn->id_tiponegocio, 'cate1' => $cate1])}}"
                                         
                                      -->       <a href="negocio?cate={{$tn->id_tiponegocio}}&cate1={{$cate1}}"
                                                 class="btn  btn-outline-primary"><i class="fa fa-plus" aria-hidden="true">Agregar Negocios</i>
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
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length">
                             <label>Show</label>   <label>
                                 
                                    <select name="formal" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"
                                    onchange="javascript:handleSelect(this)">
                                    <option value="tiponegocio?pag=4"<?php 
                                    if ($pag=='4') {
                                        echo 'selected';
                                    }?>>4</option>
                                    <option value="tiponegocio?pag=10"<?php 
                                    if ($pag=='10') {
                                        echo 'selected';
                                    }?>>10</option>
                                    <option value="tiponegocio?pag=25"<?php 
                                    if ($pag=='25') {
                                        echo 'selected';
                                    }?>>25</option>
                                    <option value="tiponegocio?pag=50"<?php 
                                    if ($pag=='50') {
                                        echo 'selected';
                                    }?>>50</option>
                                    
                                    </select> 
                                    
                                </label>
                            </div>
                        </div>
                <!--<div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 32 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                -->     
                        
                        {{$tipoNegocios->render()}}  
                      
                    </div>
                </div>
            </div>
        </div>
       
   
@endsection