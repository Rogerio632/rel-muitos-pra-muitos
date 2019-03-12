<?php

use Illuminate\Database\Seeder;

class locacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locacoes')->insert([
            'projeto_id' => '1', 'desenvolvedor_id' => 2, 'horas_semanais' => 16
            ]);
            DB::table('locacoes')->insert([
                'projeto_id' => '1', 'desenvolvedor_id' => 1, 'horas_semanais' => 20
                ]);
                DB::table('locacoes')->insert([
                    'projeto_id' => '3', 'desenvolvedor_id' => 3, 'horas_semanais' => 10
                    ]);
                    DB::table('locacoes')->insert([
                        'projeto_id' => '2', 'desenvolvedor_id' => 2, 'horas_semanais' => 5
                        ]);
                        DB::table('locacoes')->insert([
                            'projeto_id' => '3', 'desenvolvedor_id' => 2, 'horas_semanais' => 12
                            ]);
        }
}
