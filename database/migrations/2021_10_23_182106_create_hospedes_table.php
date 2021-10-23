<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedes', function (Blueprint $table) {
            $table->id();
            $table->String('nome');
            $table->String('cpf');
            $table->String('email');
            $table->String('senha');
            $table->String('celular');
            $table->String('endereco');
            $table->String('cep');
            $table->String('telefone');
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
        Schema::dropIfExists('hospedes');
    }
}