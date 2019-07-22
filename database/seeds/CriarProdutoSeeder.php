<?php

use Illuminate\Database\Seeder;
use App\Produto;// inserida essa linha, pois classe Produto nao foi criado nesse arquivo. É um model e por isso criado na raiz de App 
class CriarProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //usando essa forma , dado tbm é gerado , mas de forma fixa.
    {
        $produto = new Produto();
        $produto->nome_produto = "Produto teste";
        $produto->id_categoria = 1;
        $produto->save();

        //outra forma de criar dados é o modo abaixo com a factory
      
    factory(Produto::class, 20)->create();//definindo a quantidade de criações a serem executadas
    }
}
