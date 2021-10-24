<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_reservas', function (Blueprint $table) {
            $table->id();
            $table->date('entrada');
            $table->date('saida');
            $table->String('forma_pagamento');
            $table->unsignedBigInteger('id_reserva');
            $table->foreign('id_reserva')->references('id')->on('reservas');
            $table->unsignedBigInteger('id_quarto');
            $table->foreign('id_quarto')->references('id')->on('quartos');
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
        Schema::dropIfExists('item_reservas');
    }
}