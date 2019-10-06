@extends("theme.crui.layout")
@section("titulo")
   Lista
@endsection
 @section("contenid")
 @include('superAdmin/role/createModal')
 
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
                                                @include('superAdmin/role.search')
                                              
                                            </div>
                                           
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="card-header-actions">
                                             <span class="fa fa-cicle-o"></span> 
                                                <a href="" class="btn btn-primary Active" data-backdrop="static" data-keyboard="false"
                                                data-toggle="modal" data-target="#createRoleModal">
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
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 170px;"># Usuarios</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 201px;">Fecha último registro</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 170px;">Último usuario registrado</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 209px;">Opción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($roles))
                                        @foreach ($roles as $cat)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$cat->name}}</td>
                                            <td class="sorting_1">  </td>  
                                            <td class="sorting_1">  </td> 
                                            <td class="sorting_1">  </td>  
                                            <td>       
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
                            </div>
                        </div>
                    </div>
                </div>
@endsection



   

       
   
