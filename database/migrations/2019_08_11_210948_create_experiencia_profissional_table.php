<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienciaProfissionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia_profissional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_empresa');
            $table->string('cargo');
            $table->string('funcao')->nullable();
            $table->date('inicio_trabalho');
            $table->date('fim_trabalho');
            $table->boolean('atual')->default(1);
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
        Schema::dropIfExists('experiencia_profissional');
    }
}
