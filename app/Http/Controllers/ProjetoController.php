<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Desenvolvedor;
use App\locacao;
use App\Projeto;

class ProjetoController extends Controller
{
    public function index(){
        
        $projeto = Projeto::with('desenvolvedores')->get();
        
        
        echo "<p><b>Projeto(s):</b></p>";
        
        foreach($projeto as $p){
        
        echo "<ul><u>" . $p->nome . " | Carga horária estimada: " . $p->estimativa_hora . " horas</u></ul>";
        
        echo "<p><b>Equipe:</b><br> ";
        if(count($p->desenvolvedores) > 0){  
        foreach($p->desenvolvedores as $d){
         
             echo "~" . $d->nome . " | " .
            "Cargo: " . $d->area .  
            " | Carga Horária Semanal: " . $d->pivot->horas_semanais . " horas<br>" ;
            
            }} else{
            echo "Não há nenhum desenvolvedor alocado neste projeto.";
        }
              echo "<hr>";      
        }        
        }
    
        public function cadastro(){
            
            $proj = Projeto::all();
            $dev  = Desenvolvedor::all();
            return view('cadastro', compact('proj', 'dev'));
            
            
        }
    
    
    
       public function salvar(Request $request){
            
        $proj = new Projeto();
        $proj->id = $request->input('projeto');
        $proj->desenvolvedores->id = $request->input('dev');
        $horas_semanais = $request->input('horas_semanais');
        
        if(isset($proj)){
            
        $proj->desenvolvedores()->attach(
        
        $proj->desenvolvedores->id,
        ['horas_semanais' => $horas_semanais ]
        
            
        );    
        }    
        }
    
    
    
    
    
    
    
    }


