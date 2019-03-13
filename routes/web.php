<?php

use App\Projeto;
use App\Desenvolvedor;
use App\Locacao;

Route::get('/index', 'DesenvolvedorController@index');

Route::get('/teste', function(){
    
   echo "<h1>Essa página teste funcionou!</h1>"; 
    
});

Route::get('/index2', 'ProjetoController@index');

Route::get('/alocar/cadastrar', 'ProjetoController@cadastro');

Route::post('/alocar/salvar', 'ProjetoController@salvar');

Route::get('/alocar/desalocar', function(){
       
$p = Projeto::find(1);

if(isset($p)){

$p->desenvolvedores()->detach(1,2,3);

    echo "ok!";
} else{
    echo "Não foi encontrado nenhum projeto";
}
    

    
    
});