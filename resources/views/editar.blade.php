@extends('layouts.login')

@section('conteudo')

<div class="row text-center">
  <img src="{{asset('images/logo.png')}}" id="img-logo">
</div>

<div class="row">
  
<div class="col-md-4 col-md-offset-4" id="div-form">


  {{-- erros (validação) --}}
  @include('inc.erros')

   {{-- formulario de edição --}} 
  <form method="POST" action="/atualizar/{{ $prod->id }}">

     {{ csrf_field() }}

    {{--nome--}}
    <div class="form-group">
      <label for="nome">Nome do produto:</label>
      <input type="text" class="form-control" id="nome" name="nome"aria-describedby="emailHelp" value = "{{ $prod->nome }}" required="">
    </div>
    {{--marca--}}
    <div class="form-group">
      <label for="marca">Marca:</label>
      <input type="text" class="form-control" id="marca" name="marca" value = "{{ $prod->marca }}" required="">
    </div>
     {{--preco--}}
    <div class="form-group">
      <label for="marca">Preço:</label>
      <input type="text" class="form-control" id="preco" name="preco" value = "{{ $prod->preco }}" required="">
    </div>
    <div class="form-group">
      <label for="marca">Quantidade:</label>
      <input type="text" class="form-control" id="quantidade" name="quantidade" value = "{{ $prod->quantidade }}" required="">
    </div>
    {{--submit--}}
    <center><button type="submit" class="btn btn-primary">Atualizar</button></center>

  </form>
</div>

</div>

@endsection