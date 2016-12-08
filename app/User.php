<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table="users";
    protected $fillable = [
        'rut','nombre', 'telefono','correo','direccion','tipo_de_usuario','estado'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
