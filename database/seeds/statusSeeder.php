<?php

use Illuminate\Database\Seeder;

class statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            1 => ['status_magistrado' => 'ativo' ],
            2 => ['status_magistrado' => 'prioridade' ],
            3 => ['status_magistrado' => 'justificado' ],
            4 => ['status_magistrado' => 'ferias' ],
        ]);
    }
}
//1 para ativo, 2 para ferias, 3 para justificado, 4 para prioridade