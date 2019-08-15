<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->Bigincrements('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('rg');
            $table->string('senha');
            $table->unsignedBigInteger('id_perfil');
            $table->foreign('id_perfil')->references('id')->on('perfil');
            $table->unsignedBigInteger('id_cargo');
            $table->foreign('id_cargo')->references('id')->on('cargo');
            $table->unsignedBigInteger('id_setor');
            $table->foreign('id_setor')->references('id')->on('setor');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
