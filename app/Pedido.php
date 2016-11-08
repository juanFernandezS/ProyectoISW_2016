<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table= "pedidos";
    protected $fillable=['id','id_cob','id_comanda','descripcion'];
}
