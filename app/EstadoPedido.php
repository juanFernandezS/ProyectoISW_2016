<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoPedido extends Model
{
    protected $table="estadoPedidos";
    protected $fillable=['id','estado'];

    public function pedido(){

        return $this->belongsTo('App\Pedido','id');
    }
}
