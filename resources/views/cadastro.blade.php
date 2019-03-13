@extends('layout.app')

@section('titulo', 'Tela de cadastro')

@section('cadastro')

<form method='POST' action='/alocar/salvar'>
@csrf
    
Projeto: <select name='projeto'>
    
        
    
        @if(count($proj) > 0)
         @foreach($proj as $projs)
    
         <option value='{{$projs->id}}'>{{$projs->nome}}</option>
        
        
        @endforeach
        @else
        Não há nenhum projeto disponível.
        @endif    
    
         </select>
<br><br>

Desenvolvedor: <select name='dev'>
               
               @if(count($dev) > 0)
               @foreach($dev as $devs)
               <option value='{{$devs->id}}'>{{$devs->nome}}</option>
                @endforeach
                @else
                Não há nenhum desenvolvedor cadastrado.
                @endif
    
               </select>
    <br><br>
    Quantidade de horas semanais: <input type='number' name='horas_semanais'>
    <br><br>
   
    <input type='submit' value='Alocar'>

</form>


@endsection