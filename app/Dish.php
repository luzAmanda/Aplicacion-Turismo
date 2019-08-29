<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'platos';
    public $timestamps = true;
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_plato';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'precio', 'foto', 'tipo_foto', 'estado'];

    
}
