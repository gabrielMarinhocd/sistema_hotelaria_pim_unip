<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->Double('valor');
            $table->unsignedBigInteger('id_funcionario');
            $table->foreign('id_funcionario')->references('id')->on('funcionarios');
            $table->date('registro_saida');
            $table->date('registro_entrada');
            $table->unsignedBigInteger('id_hospede');
            $table->foreign('id_hospede')->references('id')->on('hospedes');
            $table->String('status');
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
        Schema::dropIfExists('reservas');
    }
}