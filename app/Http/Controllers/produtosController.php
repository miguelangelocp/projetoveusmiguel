<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\produtos;

class produtosController extends Controller
{
    public function InserirProduto(){

    	// inserir usuários na base de dados.
    	
    	$produto = new produtos;
    	$produto->nome = 'Seringa comum 10 mL';
    	$produto->marca = 'BUNZL';
    	$produto->preco = 10.00;
    	$produto->quantidade = 150;

    	$produto->save();

    	return 'Produto inserido com sucesso!';
    }

    public function telacadastrar(){
        //apresentar o formulario do login
        return view('cadastrar');
    }

     public function ListarProdutos()
	 {
		//$produto = produtos::all();
        $produto = DB::select('SELECT *FROM PRODUTOS WHERE id = 0');
        return view('listarprodutos', compact('produto'));

        
 	 }

     public function cadastrar(Request $cadastrar){

        $produto = new produtos;
        $produto->nome = $cadastrar->nome;
        $produto->marca = $cadastrar->marca;
        $produto->preco = $cadastrar->preco;
        $produto->quantidade = $cadastrar->quantidade;

        $produto->save();

        return redirect('listarprodutos');
     }

     public function PesquisarProdutos(Request $produtos){

        $nome_produto = $produtos->nome_produto;
        $marca_produto = $produtos->marca_produto;      
        $produto = DB::table('produtos')->where('nome', 'like', '%' . $nome_produto . '%')->where('marca', '=', $marca_produto)->get();
        return view('listarprodutos', compact('produto'));
     }

      //Exclui registros 
      public function deletar($id){

        $i = $id;

        $delete = DB::table('produtos')->where('id', '=', $i)->delete();

        if(is_null($delete)){
            echo "Registro não encontrado ou erro na base de dados!";            
        }
        else
        {
            return redirect('listarprodutos');
        }
      }

      //Editar registros
      public function editar($id){

        $prod = produtos::find($id);
        return view('editar', compact('prod'));

      }

      public function atualizar(Request $request, $id){

        $prod = produtos::find($id);

        //atualizar os campos
        $prod->nome = $request->nome;
        $prod->marca = $request->marca;
        $prod->preco = $request->preco;
        $prod->quantidade = $request->quantidade;

        $prod->update();

        //echo "ATUALIZADO!";
        return redirect('listarprodutos');
      }
}
