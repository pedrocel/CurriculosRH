<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([

            1 => ['nome' => 'João Paulo Melo','email'=>'joao@test', 'senha' => bcrypt(123456), 'cpf' => '96750585019'],
            2 => ['nome' => 'Tiago Bruno Silva Nascimento','email'=>'tiagonascimento@tjal.jus.br', 'senha' => bcrypt(123456), 'cpf' => '08553898423'],

        ]);

    }
}
