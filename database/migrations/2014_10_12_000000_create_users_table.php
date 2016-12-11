<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('correo')->unique();
            $table->string('direccion');
            $table->enum('tipo_de_usuario',['administrador','cajero','repartidor'])->defaul('cajero','repartidor');
            $table->enum('estado',['vigente','no vigente']);
            $table->string('password');


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
