@extends("theme.crui.layout")
    @section("titulo")
      Lista
    @endsection
   
     @section("contenid")
     @include('admin/sucursal/createModal')
     @include('admin/sucursal/editModal')
     @include('admin/sucursal/delete')
  
     
<div><br></div>
     <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-edit"></i>Sucursal
            </div>
            <div class="card-body">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-lg-4">
                                <fieldset class="form-group" data-select2-id="152">
                                        <label>Seleccione Sector</label>
                                        <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true"
                                        onchange="javascript:handleSelect3(this)">
                                            <option data-select2-id="141" disabled >Seleccione sector.. </option>
                                            @foreach($sectores as $tn)
                                                <option data-select2-id="141" value="sucursal?cate1={{$tn->id_sector}}"
                                                        <?php  if ($cate1== $tn->id_sector)  {  echo 'selected'; }?>
                                                    >{{$tn->nombre}}</option>
                                            @endforeach
                                        </select><span class="select2 select2-container select2-container--bootstrap select2-container--below select2-container--focus" dir="ltr" data-select2-id="140" style="width: 487.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select2-1-container"><span class="select2-selection__rendered" id="select2-select2-1-container" role="textbox" aria-readonly="true" title="Option 3">
                                                   </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </fieldset>
                        </div> 
                        <div class="col-lg-4">
                                <fieldset class="form-group" data-select2-id="152">
                                        <label>Seleccione Tipo de negocio</label>
                                        <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true"
                                        onchange="javascript:handleSelect3(this)">
                                            <option data-select2-id="141"  >Restaurante</option>
                                           
                                        </select><span class="select2 select2-container select2-container--bootstrap select2-container--below select2-container--focus" dir="ltr" data-select2-id="140" style="width: 487.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select2-1-container"><span class="select2-selection__rendered" id="select2-select2-1-container" role="textbox" aria-readonly="true" title="Option 3">
                                                   </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </fieldset>

                        </div>    
                        <div class="col-lg-4">
                            <fieldset class="form-group" data-select2-id="152">
                                    <label>Seleccione Pyme</label>
                                    <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true"
                                    onchange="javascript:handleSelect3(this)">
                                        <option data-select2-id="141" disabled >Seleccione.. </option>
                                        @foreach($negocios as $tn)
                                            <option data-select2-id="141" value="sucursal?cate={{$tn->id_negocio}}"
                                                    <?php  if ($cate== $tn->id_negocio)  {  echo 'selected'; }?>
                                                >{{$tn->nombre}}</option>
                                        @endforeach
                                    </select><span class="select2 select2-container select2-container--bootstrap select2-container--below select2-container--focus" dir="ltr" data-select2-id="140" style="width: 487.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select2-1-container"><span class="select2-selection__rendered" id="select2-select2-1-container" role="textbox" aria-readonly="true" title="Option 3">
                                               </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </fieldset>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter">

                                    @include('admin/sucursal.search')
                           
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="card-header-actions">
                                <span class="fa fa-cicle-o"></span> 
                                    <a href="" class="btn btn-primary Active" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#createSucursalModal">
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
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 201px;">Celular</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 201px;">Telefono</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 201px;">Dirección</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 201px;">Longitud</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 201px;">Latitud</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 201px;">Foto</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 209px;">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        
                                                @if(isset($sucursales))
                                                @foreach ($sucursales as $det)
                                                
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{$det->nombre}}</td>
                                                    <td class="sorting_1">{{$det->celular}}</td>
                                                    <td class="sorting_1">{{$det->telefono}}</td>
                                                    <td class="sorting_1">{{$det->direccion}}</td>
                                                    <td class="sorting_1">{{$det->longitud}}</td>
                                                    <td class="sorting_1">{{$det->latitud}}</td>
                                                    <td>
                                                            @if($det->foto == null)
                                                                
                                                            @else
                                                                <img src="{{ "data:image/" . $det->tipo_foto . ";base64," . $det->foto }}" style="max-width:75px;">
                                                            @endif
                                                    </td>

                                                    
                                                   
                                                    
                                                    <td>    
                                                    
                                                         <a href="" class="btn btn-warning btn-xs " data-backdrop="static" data-keyboard="false"
                                                        data-id_negocio="{{$det->id_sucursal}}" data-nombre="{{$det->nombre}}" data-cate="{{$cate}}" 
                                                        data-celular="{{$det->celular}}" data-telefono="{{$det->telefono}}"
                                                        data-direccion="{{$det->direccion}}" data-longitud="{{$det->longitud}}" 
                                                        data-latitud="{{$det->latitud}}" data-foto="{{$det->foto}}" data-tipo_foto="{{$det->tipo_foto}}"
                                                        data-estado="{{$det->estado}}" data-toggle="modal" data-target="#editSucursalModal"  >
                                                        <i class="fa fa-pencil-square-o"  aria-hidden="true"></i>  
                                                        </a>
                
                                                        <a title="Eliminar" data-toggle="modal" data-target="#deleteSucursalModal" 
                                                        data-action="{{route('sucursal.destroy',$det->id_sucursal)}}" data-cate="{{$cate}}" 
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