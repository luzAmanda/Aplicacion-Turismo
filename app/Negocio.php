<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $table= 'negocios';
    protected $primaryKey = 'id_negocio';
    public $timestamps = true;
    protected $filable =['nombre','descripcion'];

   /* public function sucursal(){
        return $this->belongsTo('App\Sucursal','id_negocio');   
    }*/
    public function sucursal(){
        return $this->hasMany('App\Sucursal','id_negocio');   
    }
    public function tipoNegocio(){
        return $this->hasOne('App\TipoNegocio','id_negocio');   
    }
}
