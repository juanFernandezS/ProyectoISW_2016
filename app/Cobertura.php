<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobertura extends Model
{
    protected $table= "coberturas";
    protected $fillable=['id','nombre','precio','historial'];

    public function productos(){
        return $this->hasMany('App\Producto','id,producto');
    }

    public function scopeSearch($query, $nombre)
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }
}
