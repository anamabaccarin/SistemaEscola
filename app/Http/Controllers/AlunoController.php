<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller{

    public function cadastrarAluno(Request $request){
        if ($request->isMethod('GET')){
            return view ("cadastroAluno");// view é um método já existente do controller que pode receber parâmetro
        } //se nao for get, assume que é um post retorna na view da pagina sucesso 
        //----------estático
        // $pessoas = [
        //     ['nome'=>"vinicius", "sobrenome"=>"Oliveira"]
        // ];
        // return view('sucesso', ['pessoas'=>$pessoas]);
         $novoAluno = new Aluno();
         $novoAluno->nome = $request->nome; // $novoAluno->nome (info do banco) //$request->nome;(vem do form)
         $novoAluno->cpf = $request->cpf;
         $resultado = $novoAluno->save();
             if($resultado){
                 return view ('sucesso',['erro'=>false, 'aluno'=>$novoAluno]); //se nao deu erro //'aluno' está sendo setado aqui, terá uma ligação com view
            }else {
                 return view ('sucesso', ['erro'=>true, 'aluno'=>$novoAluno]); //se deu erro
        }

    }    
        
    public function listar(Request $request){
        //nao precisa validar metodo get como no exemplo anterior//listar sempre é metodo get, nao vai fazer uma lista preenchendo inputs
    
            $alunos = new Aluno(); //cria objeto pq para aceassar model precisa do objeto
            $listaAlunos = $alunos->all(); //pegando todos os nomes
            return view('listaAluno', ['listaAlunos'=>$listaAlunos]);//mandando para view// esse nome vai no foreach
    }


    public function deletarAluno(Request $request, $id){
        $alunos = Aluno::find($id); 
        $alunos->delete();
        return redirect("/aluno/listar");
    }
}