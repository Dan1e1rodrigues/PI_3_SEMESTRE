@extends('layout.app')
    @section('main')
    <h1 >Resultados para "{{$search}}"</h1>
    <ul>
        @if(count($produtos) < 1 )
            <h2 >Não existem resultados para "{{$search}}"</h2>
        @else
        @foreach ($produtos as $produto)
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card">
                        @if (count($produto->ProdutoImagem)>0 )
                        <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
                        @else
                        <img src="../img/indisponivel.jpg" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
                            <p class="card-text">{{$produto->PRODUTO_DESC}}</p>
                            <a href="{{route('produto.show', $produto->PRODUTO_ID)}}"><button type="submit" id="botaocard">Comprar</button></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
        @endif
    </ul>

@endsection
