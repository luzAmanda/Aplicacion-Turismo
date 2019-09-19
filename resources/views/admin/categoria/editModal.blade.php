

<div class="modal fade" id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Categoría</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                
            </div>
            {!! Form::model($categorias,['route'=>['categoria.update','test'], 'method'=>'PATCH','files' => 'true'])!!}
          
           
                <div class="modal-body">
                        <input type="hidden" name="id_categoria" id="id_categoria" value="">
                        <div class="card">
                            
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
                                                    maxlength="100" minlength="5"
                                                    pattern="[A-Za-zÑñÁáÉéÍíÓóÚúÜü]+"
                                                    oninvalid="setCustomValidity('Sólo se admiten letras: Tamaño minimo:3. Tamaño maximo:100')"
                                                    oninput="setCustomValidity('')"
                                                    title="Ajústese al formato requerido."
                                                    required autofocus>
                                                </div>
                                            
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label>Icono:</label>
                                            <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i id="icon"></i>
                                                           
                                                        </span>
                                                    </span>
                                                    <div class="picker2">
                                                          
                                                            <input type="text" readonly class="form-control inputpicker2" id="icono" name="icono">
                                                     
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

