<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePedidoIngrediente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_ingrediente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pedido');
            $table->integer('id_ing');
            $table->foreign('id_pedido')->references('id')->on('pedidos');
            $table->foreign('id_ing')->references('id')->on('ingredientes');
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
        Schema::drop('tiene');
    }
}
