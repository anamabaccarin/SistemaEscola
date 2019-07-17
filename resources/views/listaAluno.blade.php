@extends('template')

@section('conteudo')
    <ul>
        
        @foreach($listaAlunos as $aluno)
            <li>{{$aluno->nome}}</li>
            <a href="/aluno/deletar/{{$aluno->id}}">Deletar<a>

        @endforeach
        
    </ul>
    
