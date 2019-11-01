<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\usuarios;


class usuariosController extends Controller
{
    public function ApresentarFormularioLogin(){
    	//apresentar o formulario do login
    	return view('usuarios_login');
    }

    public function FazerLogin(Request $request){
    	
    	//Verifica se os dados de login estão corretos
    	// 1º passo: buscar os dados do usuário
    	$dados = usuarios::where('usuario', $request->text_usuario)->first();
    	
    	$resultado = "";

    	if(is_null($dados)){
    		$resultado = "Não existe essa conta de usuário!";
    	}
    	else{

    		//Foi encontrado o usuário
    		if(Hash::check($request->text_senha, $dados->senha)){
    			$resultado = "Login com sucesso, bem vindo ".$dados->usuario."!";
    		}
    		else{
    			$resultado = "Login sem sucesso. (A sua senha está errada!)";

    		}
    	}
    	//return $resultado;
        return redirect('/listarprodutos');
    }

    public function InserirUsuario(){

    	// inserir usuários na base de dados.
    	
    	$novo = new usuarios;
    	$novo->usuario = 'Miguel';
    	$novo->senha = hash::make('minhapass');
    	$novo->email = 'miguel@teste.com';
    	$novo->save();

    	return 'Usuário inserido com sucesso!';


    }
}
/*

Joao - abc123
Miguel - minhapass
Ana - advinhaesta
Antonio - teste123

*/


//encriptação da senha

    	//$request->text_senha;

    	/*/$senha = Hash::make($request->text_senha);
    	return($request->text_senha . ' - ' . $senha);*/