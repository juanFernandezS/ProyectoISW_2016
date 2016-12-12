<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComandas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comandas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('telefono');
            $table->text('nota');
            $table->date('fecha');
            $table->integer('id_user')->unsigned();
            $table->integer('id_estado_comanda')->unsigned();
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_pago')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_estado_comanda')->references('id')->on('estado_comanda')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('id_pago')->references('id')->on('pagos')->onDelete('cascade');
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
        Schema::drop('comandas');
    }
}
