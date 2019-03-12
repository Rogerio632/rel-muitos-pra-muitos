<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
 
    public function desenvolvedores(){
    
    return $this->belongsToMany('App\Desenvolvedor', 'locacoes')->withPivot('horas_semanais');
        
    }
    
}
