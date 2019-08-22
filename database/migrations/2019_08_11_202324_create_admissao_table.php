<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->string('observacao')->nullable();
            $table->unsignedBigInteger('contratado_por');
            $table->foreign('contratado_por')->references('id')->on('usuarios');
            $table->date('inicio_trabalho');
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
        Schema::dropIfExists('admissao');
    }
}
