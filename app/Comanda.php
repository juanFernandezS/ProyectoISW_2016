<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $table= "comandas";
    protected $fillable=['id','nota','fecha','id_user','id_estado_comanda','id_cliente','id_pago'];

    public function cliente(){
        return $this->belongsTo('App\Cliente','id_cliente');
    }

    public function pago(){
        return $this->belongsTo('App\Pago','id_pago');
    }

    public function estado_comanda(){
        return $this->belongsTo('App\Estado_comanda','id_estado_comanda');
    }

    public function user(){
        return $this->belongsTo('App\User','id_user');
    }

    public function productos(){
        return $this->hasMany('App\Producto','id_producto');
    }
}
