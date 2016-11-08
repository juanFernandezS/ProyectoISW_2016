<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobertura extends Model
{
    protected $table= "coberturas";
    protected $fillable=['id','nombre','precio'];
}
