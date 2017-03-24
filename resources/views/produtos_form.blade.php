@extends('principal')

@section('conteudo')

<div class="container">

  <div class="col-sm-11"> 
      <h2> Cadastro de Produtos </h2> 
  </div>
  <div class="col-sm-1"> 
      <a href="{{route('produtos.index')}}" class="btn btn-primary" role="button"> Voltar </a>  
  </div>

    <form method="post" action="{{route('produtos.store')}}">
        {{ csrf_field() }}                
        <div class="form-group">
            <label for="nome">Descrição do Produto:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Produto">
        </div>

        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca do Produto">
        </div>

        <div class="form-group">
            <label for="quant">Quantidade:</label>
            <input type="text" class="form-control" id="quant" name="quant" placeholder="Quantidade em Estoque">
        </div>

        <div class="form-group">
            <label for="preco">Preço R$:</label>
            <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço R$">
        </div>

        <button type="submit" class="btn btn-default">Enviar</button>
        <button type="reset" class="btn btn-default">Limpar</button>
    </form>
</div>

@endsection