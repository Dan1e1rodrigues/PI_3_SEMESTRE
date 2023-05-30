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
    <div class="card">
       {{$item->Produto->PRODUTO_NOME}} - Valor:R${{$item->Produto->PRODUTO_PRECO-$item->Produto->PRODUTO_DESCONTO}} - Quantidade:{{$item->ITEM_QTD}}
       
       <img id="final" src="{{$item->Produto->ProdutoImagem[0]->IMAGEM_URL}}"
                            class="img-fluid rounded-1" width="150px" height="150px">
</div>
    @endif
     
             
      @endforeach

  

  

        
@endforeach
@endsection
