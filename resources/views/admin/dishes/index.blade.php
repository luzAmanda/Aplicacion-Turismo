@extends("theme.$theme.layout")
@section("titulo")
Home
@endsection
@section("contenido")
<div class="row">
    <div class="col-lg-12">
            <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Dishes</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Fotografía</th>
                                        <th>Precio</th>
                                        <th>Opciones</th>
                                    </tr>    
                                <thead>
                                <tbody>
                                    @if(isset($dishes))
                                    @foreach ($dishes as $dish)
                                        <tr>
                                            <td>{{$dish->id_plato}}</td>
                                            <td>{{$dish->nombre}}</td>
                                            <td>{{$dish->descripcion}}</td>
                                            <td>
                                                    @if($dish->foto == null)
                                                        
                                                    @else
                                                        <img src="{{ "data:image/" . $dish->tipo_foto . ";base64," . $dish->tipo_foto }}" style="max-width:75px;">
                                                    @endif
                                            </td>
                                            <td>{{$dish->precio}}</td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>    
                            </table>
                    </div>
            </div>
    </div>
</div>
@endsection