<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaMenurol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('men_uid');
            $table->foreign('menu_id', 'fk_menurol_menu')->references('id')->on('menu')->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id', 'fk_menurol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_rol');
    }
}
