<?php

use Illuminate\Database\Seeder;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert([
            'nome' => 'Sistema de Chamados', 'estimativa_hora' => 300
            ]);
            DB::table('projetos')->insert([
                'nome' => 'Sistema PLASA', 'estimativa_hora' => 80
                ]);
                DB::table('projetos')->insert([
                    'nome' => 'Sistema de Biblioteca', 'estimativa_hora' => 800
                    ]);
                    DB::table('projetos')->insert([
                        'nome' => 'Sistemas e Midias', 'estimativa_hora' => 500
                        ]);
    }
}
