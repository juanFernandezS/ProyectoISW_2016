<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $table= "comandas";
    protected $fillable=['id','id_estado','telefono','descripcion','fecha'];
}
