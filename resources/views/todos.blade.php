@extends('layout.app')
    @section('main')
    <style>
    .card{
        display: inline-block;
       margin-top: 3%;
        position: relative;
    }

</style>
<h1>Todos os nossos produtos</h1>
@foreach($produtos as $produto)

    <div class="card" style="width: 30rem;">
                        @if (count($produto->ProdutoImagem)>0 )
                        <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
                        @else
                        <img src="../img/indisponivel.jpg" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
                            <!-- <p class="card-text">{{$produto->PRODUTO_DESC}}</p> -->
                            <p class="card-text">R${{$produto->PRODUTO_PRECO}}</p>
                            <a href="{{route('produto.show', $produto->PRODUTO_ID)}}"><button type="submit" class="buttonLogin">Comprar</button></a>
                        </div>
                    </div>




@endforeach
 @endsection
