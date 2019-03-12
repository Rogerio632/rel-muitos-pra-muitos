<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desenvolvedor;
use App\Projeto;
class DesenvolvedorController extends Controller
{
    
    
    public function index(){

        $desenvolvedores = Desenvolvedor::with('projetos')->get();
        
        foreach($desenvolvedores as $d){

        echo "<p>Dev:" . $d->nome . "</p>";
        echo "<p>Área: " . $d->area . "</p>";
        //echo "<p>" . $d->projetos->nome . "</p>";
       // echo "<p>" . $d->projetos->estimativa_hora . "</p>";
       if(count($d->projetos) > 0){
           echo "Projeto(s): ";
           
           foreach($d->projetos as $p){

            echo "<li>" . $p->nome . "</li>";
            echo "<li>Tempo estimado:" . $p->estimativa_hora . " horas</li>|";

           }
           echo "</ul>";
       }
            echo "<hr>";
        }


    }
}
