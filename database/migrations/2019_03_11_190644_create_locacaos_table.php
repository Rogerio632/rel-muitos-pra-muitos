<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locacoes', function (Blueprint $table) {
            $table->integer('desenvolvedor_id')->unsigned();
            $table->foreign('desenvolvedor_id')->references('id')->on('desenvolvedores');
            $table->integer('projeto_id')->unsigned();
            $table->foreign('projeto_id')->references('id')->on('projetos');    
            $table->integer('horas_semanais');
            $table->timestamps();
            $table->primary(['projeto_id', 'desenvolvedor_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locacoes');
    }
}
