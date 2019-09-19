<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoNegocio extends Model
{
    protected $table= 'tipo_negocio';
    public $timestamps = true;
    protected $primaryKey = 'id_tiponegocio';
    protected $fillable = [

        'nombre', 'icono'

    ];
    public function negocios(){
        return $this->hasMany('App\Negocio','id_tiponegocio');   
    }
    public function sucursales(){
        return $this->hasManyThrough(
        'App\Sucursal',
        'App\Negocio',
        'id_tiponegocio',
        'id_negocio',
        'id_tiponegocio',
        'id_negocio'
    );
    } 
}
