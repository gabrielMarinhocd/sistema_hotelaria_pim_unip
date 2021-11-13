<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReservaServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_servicos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reserva_id')->unsigned()->index();
            $table->bigInteger('servico_id')->unsigned()->index();
            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->foreign('servico_id')->references('id')->on('servicos');
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
        Schema::dropIfExists('reserva_servicos');
    }
}
