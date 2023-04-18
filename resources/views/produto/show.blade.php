
<!--
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$produto->PRODUTO_NOME}}</title>
</head>
<body>

    <h1>{{$produto->PRODUTO_NOME}}</h1>
    <span>{{$produto->PRODUTO_PRECO}} - {{$produto->PRODUTO_DESCONTO}}</span>
</body>
</html>
-->
@extends('layout.prod')
@section('main')

    <main>
        <div class="content">
            <div class="left-side">
                <h1>{{$produto->PRODUTO_NOME}}</h1>

                <p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$produto->PRODUTO_DESC}}</li>
                        <li class="list-group-item">{{$produto->Categoria->CATEGORIA_NOME}}</li>
                    </ul>
                </p>



                <span>Valor original:R${{$produto->PRODUTO_PRECO}} </span>
                <span>Desconto:R${{$produto->PRODUTO_DESCONTO}}</span><br><br>
              <!--  <span>{{\App\Models\Categoria::find($produto->CATEGORIA_ID)->Produtos}}</span>-->

                <!--ira filtrar todos os produtos com a mesma categoria do produto da tela-->
                <span>Valor do produto com desconto: R${{$produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO}}</span><br><br><br>

                <form method="POST" action="{{route('carrinho.store', $produto->PRODUTO_ID)}}"></form>
                    QTD: <input type="number" name="ITEM_QTD">
                <button type="submit" id="botaocard">Adicionar ao carrinho</button>


            </div>

            <div class="right-side">

                <div class="img"> <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt=""></div>

            </div>
        </div>
    </main>
@endsection
