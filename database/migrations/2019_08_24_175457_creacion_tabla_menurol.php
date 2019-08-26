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
            $table->unsignedBigInteger('menuid');
            $table->foreign('menuid', 'fk_menurol_menu')->references('id')->on('menu')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('rolid');
            $table->foreign('rolid', 'fk_menurol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
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
