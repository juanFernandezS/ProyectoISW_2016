<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "users";
    protected $fillable = [
        'rut', 'nombre', 'telefono', 'correo', 'direccion', 'tipo_de_usuario', 'id_estado'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function estado(){
        return $this->belongsTo('App\Estado','id_estado');
    }

    public function comandas(){
        return $this->hasMany('App\Comanda','id_comanda');
    }

}
