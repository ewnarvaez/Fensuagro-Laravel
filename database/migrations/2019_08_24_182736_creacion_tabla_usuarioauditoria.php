<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaUsuarioauditoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_auditoria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuarioid');
            $table->foreign('usuarioid', 'fk_usuarioauditoria_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('auditoriaid');
            $table->foreign('usuarioid', 'fk_usuarioauditoria_auditoria')->references('id')->on('auditoria')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('usuario_auditoria');
    }
}
