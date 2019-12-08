<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Zizaco\Entrust\HasRole;
class User extends Authenticatable
{
    use Notifiable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  
    protected $remember_token=false;
    protected $table='users';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $guarded='id';
    protected $fillable=['cedula','nombre','apellido','direccion','celular','telefono','correo'];

   
    public function roles()
    {
        return $this
            ->belongsToMany('App\Role');
    }
   
   
}
