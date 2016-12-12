<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table= "ingredientes";
    protected $fillable=['id','nombre','cantidad_unitaria'];

    public function productos(){
        return $this->belongsToMany('App\Producto','id_producto');
    }
}
