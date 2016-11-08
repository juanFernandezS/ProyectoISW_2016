<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_de_usuario extends Model
{
    protected $table= "tipos_de_usuarios";
    protected $fillable=['rut','id_estado','id_tipo','nombre','telefono','correo','direccion'];
}
