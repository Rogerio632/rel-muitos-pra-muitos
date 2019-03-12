<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
         $this->call(ProjetosSeeder::class);
         $this->call(DesenvolvedoresSeeder::class);
         $this->call(locacoesSeeder::class);
        }
}
