<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) { //cria objeto do tipo table
            $table->bigIncrements('id');//cria atributo id do tipo bigIncrements = cria PK, UK AI,BigInt
            $table->string('name'); // padrao (191)
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();// hash que laravel gera //coloca esse hash nos cookies da maquinas que ficam armazenados e por isso se estiver gravados e bater com o do servidor, por exemplo , usuario poderá ser logado automaticamente
            $table->timestamps();//cria as duas colunas create e update no banco de dados
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
