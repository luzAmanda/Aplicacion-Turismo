<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bebidas';
    public $timestamps = true;
    

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_bebida';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'precio', 'foto', 'tipo_foto', 'estado'];

    
}
