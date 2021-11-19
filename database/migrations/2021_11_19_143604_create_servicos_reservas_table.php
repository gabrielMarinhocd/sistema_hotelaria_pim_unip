<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicosReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos_reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reserva_id');
            $table->unsignedBigInteger('servico_id');
            $table->foreign('reserva_id')->references('id')->on('reservas')->onDelete('cascade');
            $table->foreign('servico_id')->references('id')->on('servicos')->onDelete('cascade');
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
        Schema::dropIfExists('servicos_reservas');
    }
}
