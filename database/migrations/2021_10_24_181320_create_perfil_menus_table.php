<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_perfil')->unsigned();
            $table->unsignedBigInteger('id_menu')->unsigned();
            $table->foreign('id_perfil')->references('id')->on('perfils');
            $table->foreign('id_menu')->references('id')->on('menus');
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
        Schema::dropIfExists('perfil_menus');
    }
}