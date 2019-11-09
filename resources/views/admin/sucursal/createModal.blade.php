<div class="modal fade" id="createSucursalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nuevo </h4>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
            </div>
            {!! Form::open(array('action'=>'Admin\SucursalController@store', 'method'=>'POST','files' => 'true'))!!}
 
            <div class="modal-body">
                        <div class="card">
                                <input class="form-control" id="cate" name="cate" type="hidden"
                                value="{{$cate}}" required autofocus>
                                <div class="alert alert-danger" style="display:none"></div>
                                <div class="card-body">
                                        <fieldset class="form-group">
                                            <label>Nombre:</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-address-card"></i>
                                                        </span>
                                                    </span>
                                                    <input class="form-control" id="nombre" name="nombre" type="text" 
                                                    required autofocus>
                                                </div>      
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                            <div class="col-lg-6">
                                                <label>Celular:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-tablet"></i>
                                                            </span>
                                                        </span>
                                                        <input class="form-control" id="celular" name="celular" type="text" 
                                                        required autofocus>
                                                    </div>      
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Teléfono:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-phone"></i>
                                                            </span>
                                                        </span>
                                                        <input class="form-control" id="telefono" name="telefono" type="text" 
                                                        required autofocus>
                                                    </div>  
                                            </div>        
                                            </div>       
                                                    
                                        
                                        </fieldset> 
                                        <fieldset class="form-group">
                                                <label>Dirección:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-map-signs"></i>
                                                            </span>
                                                        </span>
                                                        <input class="form-control" id="direccion" name="direccion" type="text" 
                                                        required autofocus>
                                                    </div>      
                                        </fieldset> 
                                        <fieldset class="form-group">
                                            <div class="row">
                                            <div class="col-lg-6">
                                                <label>Longitud:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-thumb-tack"></i>
                                                            </span>
                                                        </span>
                                                        <input class="form-control" id="longitud" name="longitud" type="text" 
                                                        required autofocus>
                                                    </div>
                                            </div>      
                                            <div class="col-lg-6">
                                                <label>Latitud:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-map-marker"></i>
                                                            </span>
                                                        </span>
                                                        <input class="form-control" id="latitud" name="latitud" type="text" 
                                                        required autofocus>
                                                    </div>  
                                            </div>
                                            </div>     
                                        </fieldset>
                                         
                                        <fieldset class="form-group">
                                                <label>Foto:</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-image"></i>
                                                        </span>
                                                    </span>
                                                   <input type="file" class="form-control" name="foto" id="foto" >
                                                </div>
                                             
                                            </fieldset> 

                                </div>    
                        </div>
                    
                </div>
             
	
                <div class="modal-footer">
                        <button type="button" onclick="javascript:window.location.reload()" class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Close</button> 
                   
                    <button class="btn btn-primary" type="submit" action="eate" >Save changes</button>
                </div>
          
        </div>
        {{Form::Close()}}
    </div>
</div>


