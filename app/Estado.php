<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table="estados";
    protected $fillable=['id','nombre'];

    public function user(){

        return $this->hasMany('App\User', 'rut');
    }


}
