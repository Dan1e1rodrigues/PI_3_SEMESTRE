@extends('layout.app')
@section('main')
@foreach($pedidos as $pedido)

<style>
    .card{
        display: inline-block;
       margin-top: 3%;
        position: relative;
    }

</style>
<hr size="10">
<h1 class="fw-bold mb-0 text-black">Pedido de Nº{{$pedido->PEDIDO_ID}}</h1>
  <h6 class="mb-0 text-muted">Data do pedido:{{$pedido->PEDIDO_DATA}} </h6>



    @foreach($pedido->peditoItem as $item)
    @if($item->ITEM_QTD> 0)
    <div class="card" style="width: 18rem;">
        <img src="{{$item->Produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$item->Produto->PRODUTO_NOME}}</h5>
            <p class="card-text">Valor:R${{$item->Produto->PRODUTO_PRECO-$item->Produto->PRODUTO_DESCONTO}}</p>
            <p class="card-text">Quantidade:{{$item->ITEM_QTD}}</p>
        </div>
    </div>

    @endif


      @endforeach





@endforeach
@endsection
