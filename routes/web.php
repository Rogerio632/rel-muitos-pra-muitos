<?php

use App\Projeto;
use App\Desenvolvedor;
use App\Locacao;

Route::get('/index', 'DesenvolvedorController@index');

Route::get('/teste', function(){
    
   echo "<h1>Essa página teste funcionou!</h1>"; 
    
});

Route::get('/index2', 'ProjetoController@index');
