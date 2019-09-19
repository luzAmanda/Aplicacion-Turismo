<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($dish->nombre) ? $dish->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" rows="5" name="descripcion" type="textarea" id="descripcion" >{{ isset($dish->descripcion) ? $dish->descripcion : ''}}</textarea>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($dish->precio) ? $dish->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <textarea class="form-control" rows="5" name="foto" type="textarea" id="foto" >{{ isset($dish->foto) ? $dish->foto : ''}}</textarea>
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo_foto') ? 'has-error' : ''}}">
    <label for="tipo_foto" class="control-label">{{ 'Tipo Foto' }}</label>
    <textarea class="form-control" rows="5" name="tipo_foto" type="textarea" id="tipo_foto" >{{ isset($dish->tipo_foto) ? $dish->tipo_foto : ''}}</textarea>
    {!! $errors->first('tipo_foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="control-label">{{ 'Estado' }}</label>
    <input class="form-control" name="estado" type="number" id="estado" value="{{ isset($dish->estado) ? $dish->estado : ''}}" >
    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
