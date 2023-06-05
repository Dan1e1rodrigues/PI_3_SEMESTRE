

@extends('layout.prod')
@section('main')
<script>
        function login() {
            window.alert('Você precisa de uma conta para acessar o carrinho!');
        }
        // function aviso(){
        //     alert('Você deve inserir a quantidade que deseja!');
        //     document.location.reload(true);
        // }
</script>
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
                <span>Quantidade disponivel:{{$produto->PRODUTO_QTD}}</span>
                <span>Valor original:R${{$produto->PRODUTO_PRECO}} </span>
                <span>Desconto:R${{$produto->PRODUTO_DESCONTO}}</span><br><br>
              <!--  <span>{{\App\Models\Categoria::find($produto->CATEGORIA_ID)->Produtos}}</span>-->

                <!--ira filtrar todos os produtos com a mesma categoria do produto da tela-->
                <span>Valor do produto com desconto: R${{$produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO}}</span><br><br><br>
                @if(!Auth::check())

                <div>
                    <label for="">Adicionar quantidade</label>
                    <input type="number" name="ITEM_QTD" min="1" value="1">
                </div>

                    <a href="/login">
                        <button type="submit" class="buttoncarrinho" onclick="login()">Adicionar ao carrinho</button>
                    </a>


                @else
                <form method="POST" action="{{route('carrinho.store', $produto->PRODUTO_ID)}}">
                @csrf

                <div>
                    <label for="">Adicionar quantidade</label>
                    <input type="number" name="ITEM_QTD" min="1" value="1">

                    <button type="submit" class="buttoncarrinho" onclick="aviso()">Adicionar ao carrinho</button>
                </div>

                </form>
                @endif


            </div>

            <div class="right-side">
                <div class="img"> <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}"></div>
            </div>
        </div>
    </main>
@endsection
