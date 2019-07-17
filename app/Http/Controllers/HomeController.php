<?php

namespace App\Http\Controllers; //namespace avisa em qual o contexto a classe está salva

use Illuminate\Http\Request;// no laravel para usar uma classe é necessario o "use"

class HomeController extends Controller
{
    public function home(Request $request, $id){//recebendo objeto do tipo request onde estão todos os metodos get, post...
        if($request->isMethod('GET')){ //essa verificacao é usada qdo houver metodo post e get(aqui temos apenas get):aqui pergunta pro request se o metodo é do tipo get 
            $idade = 21;
            return view('home',['id'=>$id]);//primeiro vai para controller e depois para view
        }
    }
}
