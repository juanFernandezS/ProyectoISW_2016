<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table= "ingredientes";
    protected $fillable=['id','nombre'];

    public function productos(){
        return $this->belongsToMany('App\Producto','id_producto');
    }
}
