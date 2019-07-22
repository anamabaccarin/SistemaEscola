<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function listarTodos (Request $request){
        $produto = new Produto();
        $listarProdutos = $produto->paginate(5);
        //listarProdutos = Produto::all();

        return view('produtos',['produtos'=>$listarProdutos]);
    }
}
