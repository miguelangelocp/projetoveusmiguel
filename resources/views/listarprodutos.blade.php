@extends('layouts.app')

@section('content')
<div class="container">
<h4>Produtos Hospitalares e Laboratoriais</h4>
<br>
<br>
<a href="/telacadastro" class="btn btn-lg btn-success">Cadastrar Produto</a>
<br>
<br>
<br>
<br>
<br>
<h6>Pesquisar Produtos:</h6>
<form action="pesquisar_produto" method="POST">
	{{ csrf_field() }}
	<input type="text" class="col-md-4 col-md-offset-4" id="produto" name="nome_produto" placeholder="Nome do produto">
	<br>
	<br>
	<input type="text" class="col-md-4 col-md-offset-4" id="produto" name="marca_produto" placeholder="Marca">
	<button type="submit" class="btn btn-primary">Pesquisar</button>
</form>
<br>
<br>
<table class="table table-striped table-bordered table-hover">
<thead>
	<tr>
		<th>Nome</th>
		<th>Marca</th>
		<th>Preço</th>
		<th>Quantidade</th>
		<th>Ação</th>
	</tr>
</thead>
<tbody>
@foreach($produto as $prod)
<tr>
 <td>{{ $prod->nome }}</td>
 <td>{{ $prod->marca }}</td>
 <td>R${{ $prod->preco }}</td>
 <td>{{ $prod->quantidade }}</td>
 <td>
 <a href="/editar/{{ $prod->id }}" class="btn btn-lg btn-success">Editar</a>
 <a href="/delete/{{ $prod->id }}" class="btn btn-lg btn-danger">Deletar</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection