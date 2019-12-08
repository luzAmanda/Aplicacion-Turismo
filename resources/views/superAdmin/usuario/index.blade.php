@extends("theme.crui.layout")
@section("titulo")
   Lista
@endsection
 @section("contenid")
 @include('superAdmin/usuario/createModal')
 @include('superAdmin/usuario/editModal')


 @section("menu-usuarios")
    <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a class="btn btn-link {{strpos(Request::fullUrl(), 'usuario-sadmin?display=todos') ? 'disabled' : ''}}" href="{{URL::action('SuperAdmin\UsuarioController@index',['display'=>'todos'])}}">Todos</a></li>
            <li class="breadcrumb-item"><a class="btn btn-link {{strpos(Request::fullUrl(), 'usuarios?display=SuperAdmin') ? 'disabled' : ''}}" href="{{URL::action('SuperAdmin\UsuarioController@index',['display'=>'SuperAdmin'])}}">Super-Administrador</a> </li>
            <li class="breadcrumb-item"> <a class="btn btn-link {{strpos(Request::fullUrl(), 'usuarios?display=Administrador') ? 'disabled' : ''}}" href="{{URL::action('SuperAdmin\UsuarioController@index',['display'=>'Administrador'])}}">Administrador</a></li>
            <li class="breadcrumb-item"><a class="btn btn-link {{strpos(Request::fullUrl(), 'usuarios?display=Propietario') ? 'disabled' : ''}}" href="{{URL::action('SuperAdmin\UsuarioController@index',['display'=>'Propietario'])}}">Propietario</a> </li>
            <li class="breadcrumb-item"><a class="btn btn-link {{strpos(Request::fullUrl(), 'usuarios?display=Encargado') ? 'disabled' : ''}}" href="{{URL::action('SuperAdmin\UsuarioController@index',['display'=>'Encargado'])}}">Encargado</a> </li>       
    </ol>
@endsection 
<br>
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
                                           
                                            
                                            <td>{{ $cat->display_name}}
                                                @if($cat->display_name=="Administrador")    
                                                <a href="" class="btn btn-warning btn-xs " data-backdrop="static" data-keyboard="false"
                                                data-id_usuario="{{$cat->id}}" data-nombre="{{$cat->nombre}}" data-apellido="{{$cat->apellido}}"
                                                data-cedula="{{$cat->cedula}}" data-celular="{{$cat->celular}}"
                                                data-telefono="{{$cat->telefono}}" data-correo="{{$cat->correo}}"
                                                data-direccion="{{$cat->direccion}}"
                                                 data-toggle="modal" data-target="#editUsuarioModal"  >
                                                <i class="fa fa-pencil-square-o"  aria-hidden="true"></i>  
                                                </a>
                                                <a title="Eliminar" data-toggle="modal" data-target="#modalDelete" href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                                @endif
                                                
                                            </td>
                                        </tr>
                                  
                                @endforeach
                                @endif
                                </tbody>
                                
                                </table>
                            </div>
                        </div>
                        <div class="row">
                                {{$usuarios->render()}}
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="DataTables_Table_0_length">
                                    
                                                            <select style="width:70px" name="formal" class="form-control" onchange="javascript:handleSelect(this)">
                                                                <option value="usuario-sadmin?pag=7"<?php 
                                                                    if ($pag=='5') {
                                                                        echo 'selected';
                                                                    }?>>5</option>
                                                                    <option value="usuario-sadmin?pag=15"<?php 
                                                                    if ($pag=='8') {
                                                                        echo 'selected';
                                                                    }?>>8</option>
                                                                    <option value="usuario-sadmin?pag=25"<?php 
                                                                    if ($pag=='15') {
                                                                        echo 'selected';
                                                                    }?>>15</option>
                                                                    <option value="usuario-sadmin?pag=50"<?php 
                                                                    if ($pag=='25') {
                                                                        echo 'selected';
                                                                    }?>>25</option>
                                                                    <option value="usuario-sadmin?pag=100"<?php 
                                                                    if ($pag=='50') {
                                                                        echo 'selected';
                                                                    }?>>50</option>
                                                            </select>
                                                    </div>
                                                </div>

                                    </div>
                                </div>
                        <!--<div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 32 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        -->     
                                
                           
                              
                            </div>
                        </div>
                   
                    </div>
                </div>
@endsection



   

       
   
