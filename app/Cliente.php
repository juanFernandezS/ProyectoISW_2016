<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table="clientes";
    protected $fillable=['id','telefono','nombre','direccion','id_zona'];

    public function zona(){

        return $this->belongsTo('App\Zona','id_zona');
    }

    public function comandas(){
        return $this->hasMany('App\Comanda','id_comanda');
    }

    public function scopeSearch($query, $telefono)
    {
        return $query->where('telefono', 'LIKE', "%$telefono%");
    }
}
