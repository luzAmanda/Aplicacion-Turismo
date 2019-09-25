<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = 'sectores';
    public $timestamps = true;
    protected $primaryKey = 'id_sector';
    protected $fillable = ['nombre', 'icono'];

}
