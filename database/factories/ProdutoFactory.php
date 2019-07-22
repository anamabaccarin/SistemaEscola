<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {//qdo esse file é criado vem com Model e foi alterado por Produto
    return [
        //
        "nome_produto" => $faker->name,
        "id_categoria" => $faker->randomDigit
    
    ];
});
