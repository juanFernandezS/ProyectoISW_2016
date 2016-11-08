<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $table= "historiales";
    protected $fillable=['id','id_cob','detalles'];
}
