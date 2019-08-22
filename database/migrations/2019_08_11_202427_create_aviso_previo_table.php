<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisoPrevioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aviso_previo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('motivo')->nullable();
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->unsignedBigInteger('avisado_por');
            $table->foreign('avisado_por')->references('id')->on('usuarios');
            $table->date('inicio_trabalho');
            $table->date('fim_trabalho');
            $table->unsignedBigInteger('id_setor');
            $table->foreign('id_setor')->references('id')->on('setor');
            $table->unsignedBigInteger('id_cargo');
            $table->foreign('id_cargo')->references('id')->on('cargo');
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
        Schema::dropIfExists('aviso_previo');
    }
}
