

<div class="modal fade" id="createUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nuevo Rol</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                
            </div>
            {!! Form::open(array('action'=>array('SuperAdmin\RolController@store'), 'method'=>'POST','files' => 'true'))!!}
            
            <div class="modal-body">
                        <div class="card">
                                <div class="alert alert-danger" style="display:none"></div>
                                <div class="card-body">
                                        <fieldset class="form-group">
                                                <label>Nombre:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-map-signs"></i>
                                                            </span>
                                                        </span>
                                                        <input class="form-control" id="nombre" name="nombre" type="text" 
                                                        required autofocus>
                                                    </div>      
                                        </fieldset> 
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Descripción:</label>
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
