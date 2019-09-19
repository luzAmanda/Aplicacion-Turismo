<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    public $timestamps = true;
    protected $primaryKey = 'id_categoria';
    protected $fillable = ['nombre', 'icono'];

    public function detalles(){
        return $this->hasManyThrough(
        'App\Detalle',
        'App\SucursalCategoria',
        'id_categoria',
        'id_sucursalcategoria',
        'id_categoria',
        'id_sucursalcategoria'
    );
    } 
}

