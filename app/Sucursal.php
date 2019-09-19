<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table= 'sucursales';
    protected $primaryKey = 'id_sucursal';
    
    public function opinion(){
        return $this->hasMany('App\Opinion','id_sucursal');
    } 
    public function promocion(){
        return $this->hasMany('App\Promocion','id_sucursal');
    } 
    public function negocio(){
        return $this->hasOne('App\Negocio','id_negocio');
    }
    public function detalle_sucursal(){
        return $this->hasMany('App\SucursalDetalle','id_sucursal');
    }
   
    public function detalle(){
          return $this->belongsToMany('App\Detalle','sucursal_detalle','id_sucursal','id_sucursaldetalle');
        }

        public function categorias(){
            return $this->belongsToMany('App\Categoria','sucursal_categoria','id_sucursal','id_sucursalcategoria');
          }

        public function categorias2()
    {
        return $this->hasManyThrough(
        'App\Categoria',
        
        'App\SucursalDetalle',
       
        
       'id_categoria',
        'id_categoria',
        'id_sucursal',
        
       
   
        'id_categoria','id_detalle','id_sucursaldetalle');
    }
}
