<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormacaoAcademicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacao_academica', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_curso');
            $table->string('instituicao');
            $table->date('inicio_curso');
            $table->date('fim_curso')->nullable();
            $table->unsignedBigInteger('id_tipo_curso');
            $table->foreign('id_tipo_curso')->references('id')->on('tipo_curso');
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
        Schema::dropIfExists('formacao_academica');
    }
}
