@extends("theme.$theme.layout")
@section("titulo")
Lista
@endsection
@section("contenido")
<div class="row">
    <div class="col-lg-12">
            <div class="card-header">
                   
                    <div class="card-header-actions">
                            <span class="fa fa-cicle-o"></span> <strong>Plato</strong>
                        <a href="{{ url('dishes/create') }}" class="btn btn-primary Active">
                            <span class="fa fa-plus-square"></span> Nuevo
                        </a>
                    </div>
                </div><br>
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
                                                        <img src="{{ "data:image/" . $dish->tipo_foto . ";base64," . $dish->foto }}" style="max-width:75px;">
                                                    @endif
                                            </td>
                                            <td>{{$dish->precio}}</td>
                                            <td>
                                                    <a class="btn btn-info active" href="">
                                                            <i class="fa fa-edit"></i>
                                                    </a>
                                            </td>

                                            
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