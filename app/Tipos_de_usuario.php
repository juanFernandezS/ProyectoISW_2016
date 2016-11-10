<?php

namespace App;password_resets

use Illuminate\Database\Eloquent\Model;

class Tipos_de_usuario extends Model
{
    protected $table= "tipos_de_usuarios";
    protected $fillable=['id','rut','id_estado','nombre','telefono','correo','direccion'];

}
