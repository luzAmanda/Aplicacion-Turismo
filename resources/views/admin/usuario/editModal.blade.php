

<div class="modal fade" id="editUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Usuario</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                
            </div>
            {!! Form::model($usuarios,['route'=>['tiponegocio.update','test'], 'method'=>'PATCH','files' => 'true'])!!}
          
           
                <div class="modal-body">
                        <input type="hidden" name="id_usuario" id="id_usuario" value="">
                        <div class="card">
                            
                                <div class="alert alert-danger" style="display:none"></div>
                                <div class="card-body">
                                        <fieldset class="form-group">
                                                <label>C.I/RUC</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-map-signs"></i>
                                                            </span>
                                                        </span>
                                                        <input class="form-control" id="cedula" name="cedula" type="text" 
                                                        required autofocus>
                                                    </div>      
                                        </fieldset> 
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
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
                                                </div>
                                                <div class="col-lg-6">
                                                        <label>Apellido:</label>
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="fa fa-address-card"></i>
                                                                    </span>
                                                                </span>
                                                                <input class="form-control" id="apellido" name="apellido" type="text" 
                                                                required autofocus>
                                                            </div>  
                                                </div>
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
                                                    <label>Email:</label>
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-email"></i>
                                                                </span>
                                                            </span>
                                                            <input class="form-control" id="correo" name="correo" type="text" 
                                                            required autofocus>
                                                        </div>
                                                </div>      
                                                
                                                </div>     
                                            </fieldset>
                                </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit" action="eate" >Save changes</button>
                </div>
          
        </div>
        {{Form::Close()}}
    </div>
</div>



<!-- Modal -->
<!--
<div class="modal fade" id="modalCreateM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"  style="background-color:  #2980b9;">
				<h3 class="modal-title" style="color:white;" id="exampleModalLongTitle">Registrar Espacio</h3>
                {{--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>  --}}
			</div>
        </div>
    </div>
</div>
-->

