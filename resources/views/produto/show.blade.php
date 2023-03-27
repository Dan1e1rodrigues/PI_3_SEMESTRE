
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
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{$produto->PRODUTO_NOME}}</title>
</head>

<body>
    <header>
        <!-- Barra de navegação -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Delta</a> -->
                <a class="navbar-brand" href="#"><img src="/img/logo-favicon.png" width="10%">Delta</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <form class="d-flex" role="search">
                        <!--Conferir se a alteração de search para possa gerar algum problema pesquisar-->
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login/Cadastro
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Senha">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Entrar</button>
                                </form>
                            </li>

                            <!-- <li><a class="dropdown-item" href="#">Another action</a></li> -->
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Cadastre-se</a></li>
                        </ul>
                    </li>
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Produto</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
    </header>

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
                <span>Quantidade disponivel:{{$produto->ProdutoEstoque}}</span>
                <span>Valor original:R${{$produto->PRODUTO_PRECO}} </span>
                <span>Desconto:R${{$produto->PRODUTO_DESCONTO}}</span><br><br>
                <span>{{\App\Models\Categoria::find($produto->CATEGORIA_ID)->Produtos}}</span>

                <!--ira filtrar todos os produtos com a mesma categoria do produto da tela-->
                <span>Valor do produto com desconto: R${{$produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO}}</span><br><br><br>

                <a class="btn btn-primary" href="#" role="button">ADICIONAR AO CARRINHO</a>


            </div>

            <div class="right-side">
                <div class="img"> <img src=""></div>
            </div>
        </div>
    </main>
</body>

</html>
