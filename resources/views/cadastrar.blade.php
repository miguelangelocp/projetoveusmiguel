@extends('layouts.login')

@section('conteudo')

<div class="row text-center">
  <img src="{{asset('images/logo.png')}}" id="img-logo">
</div>

<div class="row">
  
<div class="col-md-4 col-md-offset-4" id="div-form">


  {{-- erros (validação) --}}
  @include('inc.erros')

    
  <form method="POST" action="/cadastrar">

     {{ csrf_field() }}

    {{--nome--}}
    <div class="form-group">
      <label for="nome">Nome do produto:</label>
      <input type="text" class="form-control" id="nome" name="nome" value="nome">
    </div>
    {{--marca--}}
    <div class="form-group">
      <label for="marca">Marca:</label>
      <input type="text" class="form-control" id="marca" name="marca" value="marca">
    </div>
     {{--preco--}}
    <div class="form-group">
      <label for="marca">Preço:</label>
      <input type="text" class="form-control" id="preco" name="preco" value="preco">
    </div>
    <div class="form-group">
      <label for="marca">Quantidade:</label>
      <input type="text" class="form-control" id="quantidade" name="quantidade" value="quantidade">
    </div>
    {{--submit--}}
    <center><button type="submit" class="btn btn-primary">Cadastrar</button></center>
  </form>
</div>

</div>
@endsection