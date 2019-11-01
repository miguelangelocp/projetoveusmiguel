@extends('layout.login')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="POST" action="/atualizar">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="nome">Nome do produto:</label>
          <input type="text" class="form-control" name="nome" value={{ $selectprod->nome }} />
        </div>
        <div class="form-group">
          <label for="marca">Marca:</label>
          <input type="text" class="form-control" name="marca" value={{ $share->marca }} />
        </div>
        <div class="form-group">
          <label for="preco">Preço:</label>
          <input type="text" class="form-control" name="preco" value={{ $share->preco }} />
        </div>
        <div class="form-group">
          <label for="quantidade">Quantidade:</label>
          <input type="text" class="form-control" name="quantidade" value={{ $share->quantidade }} />
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
  </div>
</div>
@endsection