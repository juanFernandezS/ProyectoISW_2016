<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table= "Productos";
    protected $fillable=['id','id_cob','id_comanda'];

    public function comanda(){
        return $this->belongsTo('App\Comanda','id_comanda');
    }

    public function cobertura(){
        return $this->belongsTo('App\Cobertura','id_cob');
    }

    public function ingredientes(){
        return $this->belongsToMany('App\Ingrediente','id_ingrediente');
    }
}
