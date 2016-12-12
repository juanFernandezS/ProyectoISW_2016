<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado_comanda extends Model
{
    protected $table="estado_comanda";
    protected $fillable=['id','estado'];

    public function comandas(){
        return $this->hasMany('App\Comanda','id_comanda');
    }
}
