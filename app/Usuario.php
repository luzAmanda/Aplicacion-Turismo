<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table= 'usuarios_cli';
    public $timestamps = true;
    protected $primaryKey = 'id_usuario';
    protected $fillable = [

        'nombre', 'apellido','cedula','celular','telefono','direccion','correo'

    ];
}
