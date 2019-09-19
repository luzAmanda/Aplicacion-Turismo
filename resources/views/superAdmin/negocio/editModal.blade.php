<div class="modal fade" id="editNegocioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Negocio</h4>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
            </div>
            {!! Form::model($negocios,['route'=>['negocio.update','test'], 'method'=>'PATCH','files' => 'true'])!!}
             
            <div class="modal-body">
                        <div class="card">
                                <input class="form-control" id="cate" name="cate" type="hidden"
                                 required autofocus>
                                <input class="form-control" id="id_negocio" name="id_negocio" type="hidden"
                               required autofocus>
                                <div class="alert alert-danger" style="display:none"></div>
                                <div class="card-body">
                                        <fieldset class="form-group">
                                            <label>Nombre:</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-list"></i>
                                                        </span>
                                                    </span>
                                                    <input class="form-control" id="nombre" name="nombre" type="text" 
                                                    required autofocus>
                                                </div>
                                                <small class="text-muted">Ejemplo: Servicios</small>
                                        </fieldset>
                                        <fieldset class="form-group">
                                                <label>Descripción:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control" name="descripcion" id="descripcion"  rows="4" placeholder="Content.."></textarea>
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
