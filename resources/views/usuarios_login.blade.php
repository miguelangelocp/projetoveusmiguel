@extends('layouts.login')

@section('conteudo')

<div class="row text-center">
	<img src="{{asset('images/logo.png')}}" id="img-logo">
</div>

<div class="row">
	
<div class="col-md-4 col-md-offset-4" id="div-form">


	{{-- erros (validação) --}}
	@include('inc.erros')

		
	<form method="POST" action="/usuarios_fazer_login">

		{{ csrf_field() }}

		{{--usuário--}}
	  <div class="form-group">
	    <label for="id_usuario">Usuário:</label>
	    <input type="text" class="form-control" id="id_usuario" name="text_usuario"aria-describedby="emailHelp" placeholder="Usuário">
	  </div>
	  {{--senha--}}
	  <div class="form-group">
	    <label for="id_senha">Senha:</label>
	    <input type="password" class="form-control" id="id_senha" name="text_senha" placeholder="Senha">
	  </div>
	  <div class="form-group form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Relembrar</label>
	  </div>
	  {{--submit--}}
	  <center><button type="submit" class="btn btn-primary">Login</button></center>

	</form>
	{{-- criar nova conta --}}
	<br>
	<a href="">Criar nova conta</a>
</div>

</div>

@endsection