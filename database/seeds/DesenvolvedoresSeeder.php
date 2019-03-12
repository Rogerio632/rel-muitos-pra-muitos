<?php

use Illuminate\Database\Seeder;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desenvolvedores')->insert([
        'nome' => 'Seu Aragão', 'area' => 'Analista Sênior'
        ]);
        DB::table('desenvolvedores')->insert([
            'nome' => 'Seu Zé', 'area' => 'Analista Júnior'
            ]);
            DB::table('desenvolvedores')->insert([
                'nome' => 'Seu João', 'area' => 'Analista Pleno'
                ]);
    }
}
