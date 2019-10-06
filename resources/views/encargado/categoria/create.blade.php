@extends("theme.crui.layout")
    @section("titulo")
        Create
    @endsection
     @section("contenid")
 {{--{!! Form::open(['url' => 'menu-platos','files' => 'true']) !!} 
<form action="{{route(menu-platos)}}" id="form-general" class="form-horizontal" method="POST"> --}}
                <div class="row">
                    <div class="col-lg-12">
                            @include('includes.form-error')
                        <div class="box box-danger  ">
                            <div class="box-header with-border">
                                <h3 class="box-title">Crear Platos</h3>
                            </div>
                                <div class="box-body">
                         {{--       {!! Form::open(['url' => 'admin/dishes','files' => 'true']) !!}  --}}  
                                <form  method="POST" action="{{route('dishes.store')}}" id="form-general" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf  

                                        <div class="form-group">
                                            <label for="Nombre" class="col-lg-3 control-label requerido">Nombre</label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="{{old('nombre')}}"  >
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="descripcion" class="col-lg-3 control-label" >Descripción</label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control" name="descripcion" rows="3" placeholder="Enter ..." value="{{old('descripcion')}}"></textarea>
                                                </div>
                                        </div>
                                            {{-- <div class="form-group">
                                                    <label for="exampleInputFile" class="col-lg-3 control-label" >Foto</label>
                                                    <div class="col-lg-8">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                        <div class="col-lg-3 hidden-xs contImg text-center">
                                                                                <a class="preview" href="/img/img2.png">
                                                                                    <img src="/img/img3.png">
                                                                                    <div id="image_preview"></div>
                                                                                </a>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Subir Imagen</button>
                                                                        </div>
                                                                    <!-- Modal -->
                                                                        <div class="modal fade" id="myModal" role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                        <h4 class="modal-title">Escoger imagen</h4>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="form-group margin-bottom-0 field-upload-1-uploadfile has-error">
                                                                                            <label class="control-label col-lg-3" for="upload-1-uploadfile">Escoge el archivo</label>
                                                                                            <div class="col-lg-9">
                                                                                                <input type="file" id="uploadFile" class="inputImagen margin-top-10" name="Upload[1][uploadFile]" >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-top-0">
                                                                                                <div class="col-sm-9 col-sm-offset-3">
                                                                                                    <p class="color-secunday"> Peso máximo: 2Mb <a class="glyphicon glyphicon-info-sign" id="imagePopover" data-toggle="popover" title="" data-content="jpg, jpeg, png" data-original-title="Extensiones permitidas"></a></p>
                                                                                                    <p class="color-secunday"> Dimensiones sugeridas: 600x360 px</p>                        
                                                                                                </div>     
                                                                                        </div>
                                                                                    <div class="modal-footer">
                                                                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                                                                <span style="display:none">
                                                                                                    <img class="margin-right-10" src="/img/preloader.GIF" width="25" alt="">
                                                                                                </span>
                                                                                                <span class="texto">Subir
                                                                                                </span>
                                                                                            </button>
                                                                                    </div>                                                                    
                                                                                </div>                                                                
                                                                            </div>
                                                                        </div>   
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label requerido" for="foto">Foto</label>
                                                <div class="col-lg-8">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <input name="foto" type="file" accept=".jpg,.png,.jpeg" class="custom-file-input" id="foto" >
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                                
                                        <div class="form-group">
                                            <label for="precio" class="col-lg-3 control-label">Precio</label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="precio" class="form-control" id="precio" placeholder="0.0" value="{{old('precio')}}" >
                                                </div>    
                                        </div>  
                                        
                                        <div class="box-footer">
                                            <div class="col-lg-3"></div>
                                                <div class="col-lg-8">
                                                    {{--   <a class="btn btn-danger" href="{{ url('menu-platos') }}">Cancelar</a>--}}
                                                    <button type="reset" class="btn btn-default">Cancel</button>
                                                    <button type="submit" class="btn btn-info pull">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>    
                            {{--    {!! Form::close() !!}  --}}
                                </div>    
                        </div>
                    </div>
                </div>

            @endsection