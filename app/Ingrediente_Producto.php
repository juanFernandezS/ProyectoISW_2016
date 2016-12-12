<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente_Producto extends Model
{
    protected $table="";
    protected $fillable=['id','id_ingrediente','id_producto'];
}
