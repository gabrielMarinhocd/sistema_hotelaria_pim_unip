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
            $table->unsignedBigInteger('perfil_id')->unsigned();
            $table->unsignedBigInteger('menu_id')->unsigned();
            $table->foreign('perfil_id')->references('id')->on('perfils');
            $table->foreign('menu_id')->references('id')->on('menus');
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
