@extends("theme.crui.layout")
@section("titulo")
   Lista
@endsection
 @section("contenid")
 @include('superAdmin/usuario/createModal')
 
<br><br>
 <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                            
                            <i class="fa fa-edit"></i>Usuarios   
                       
                    </div>
                <div class="card-body">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                           
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                @include('superAdmin/usuario.search')
                                              
                                            </div>
                                           
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="card-header-actions">
                                             <span class="fa fa-cicle-o"></span> 
                                                <a href="" class="btn btn-primary Active" data-backdrop="static" data-keyboard="false"
                                                data-toggle="modal" data-target="#createUsuarioModal">
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

                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 170px;">Cedula</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 170px;">Nombres</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 201px;">Celular</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 170px;">Correo</th>
                                        <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 88px;">Opción</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 98px;">Status</th>
                                        -->
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 209px;">Opción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($usuarios))
                                        @foreach ($usuarios as $cat)
                                        <tr role="row" class="odd">
                                                     
                                                        <td class="sorting_1">{{$cat->cedula}}</td>    
                                            <td class="sorting_1">{{$cat->nombre}}<br>{{$cat->apellido}}</td>
                                            <td class="sorting_1">{{$cat->celular}}</td>  
                                            <td class="sorting_1">{{$cat->correo}}</td>  
                                            
                                            <td>    
                                                <a href="" class="btn btn-warning btn-xs " data-backdrop="static" data-keyboard="false"
                                                data-id_usuario="{{$cat->id_usuario}}" data-nombre="{{$cat->nombre}}" data-apellido="{{$cat->apellido}}"
                                                data-cedula="{{$cat->cedula}}" data-celular="{{$cat->celular}}"
                                                data-telefono="{{$cat->telefono}}" data-correo="{{$cat->correo}}"
                                                data-direccion="{{$cat->direccion}}"
                                                 data-toggle="modal" data-target="#myEditModal"  >
                                                <i class="fa fa-pencil-square-o"  aria-hidden="true"></i>  
                                                </a>
        
                                          
                                                <a href="detalle?cate={{$cat->id_categoria}}"
                                                            class="btn  btn-outline-primary"><i class="fa fa-plus" aria-hidden="true">Agregar Producto</i>
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
                                     
                                    </div>
                                </div>
                        <!--<div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 32 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        -->     
                                
                           
                              
                            </div>
                        </div>
                    </div>
                </div>
@endsection



   

       
   
