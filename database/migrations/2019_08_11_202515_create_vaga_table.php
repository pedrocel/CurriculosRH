<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVagaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_vaga');
            $table->string('requisitos');
            $table->unsignedBigInteger('id_setor');
            $table->foreign('id_setor')->references('id')->on('setor');
            $table->unsignedBigInteger('criado_por');
            $table->foreign('criado_por')->references('id')->on('usuarios');
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
        Schema::dropIfExists('vaga');
    }
}
