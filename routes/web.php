<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{id}', 'HomeController@home'); //qdo usuario digitar home na url , essa funcao chama HomeController e acessa metodo 'home' ,levando solicitacao do usuario
    
Route::get('/contato','contatoController@listarcontatos');

Route::get('/aluno/cadastro','AlunoController@cadastrarAluno');

Route::post('/aluno/cadastro','AlunoController@cadastrarAluno');

Route::get('/aluno/listar','AlunoController@listar');

Route::get('/aluno/deletar/{id}','AlunoController@deletarAluno');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/produtos/todos','ProdutoController@listarTodos');
