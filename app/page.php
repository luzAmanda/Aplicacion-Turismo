<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    public static function getSector(){
        $value =DB::table('sectores')->orderBy('id_sector','asc')->get();
        return $value;
    }
    
    public static function getSectorTnegocio($sectorid=0){
        $value=DB::table('tipo_negocio')->where('id_sector',$sectorid)->get();
        return $value;
    }
}
