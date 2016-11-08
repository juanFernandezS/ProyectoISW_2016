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
<<<
            $table->increments('id');
            $table->string('rut');
            $table->integer('id_estado')->unsigned();
            $table->integer('id_tipo')->unsigned();
            $table->string('nombre');
            $table->integer('telefono');
            $table->string('correo')->unique();
            $table->string('direccion');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->foreign('id_tipo')->references('id')->on('tipos_de_usuarios');

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
