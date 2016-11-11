<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTiene extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingrediente_pedido', function (Blueprint $table) {
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
        Schema::drop('ingrediente_pedido');
    }
}
