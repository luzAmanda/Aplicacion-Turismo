<div class="modal fade" id="createNegocioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nuevo </h4>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
            </div>
            {!! Form::open(array('action'=>'SuperAdmin\NegocioController@store', 'method'=>'POST','files' => 'true'))!!}
 
            <div class="modal-body">
                        <div class="card">
                                <input class="form-control" id="cate" name="cate" type="text"
                                value="{{$cate}}" required autofocus>
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
                                                   
                                                    <textarea class="form-control" name="descripcion" id="descripcion" id="textarea-input" name="textarea-input" rows="4" placeholder="Content.."></textarea>
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


