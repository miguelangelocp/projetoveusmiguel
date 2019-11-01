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
    return view('usuarios_login');
});

Route::get('usuarios_login', 'usuariosController@ApresentarFormulariologin');
Route::post('usuarios_fazer_login', 'usuariosController@FazerLogin');
Route::get('inserir_usuario', 'usuariosController@InserirUsuario');
Route::get('inserir_produto', 'produtosController@InserirProduto');
Route::get('listarprodutos', 'produtosController@ListarProdutos');
Route::post('pesquisar_produto', 'produtosController@PesquisarProdutos');
Route::get('telacadastro', 'produtosController@telacadastrar');
Route::post('cadastrar', 'produtosController@cadastrar');
Route::get('/delete/{id}','produtosController@deletar');
Route::get('/editar/{id}','produtosController@editar');
Route::post('/atualizar/{id}','produtosController@atualizar');