<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/css/index.css" media="screen"/>
    

    <!-- Link Favicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--Link das Imagens.css-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--Google-Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=Poppins:wght@600&family=Space+Mono&display=swap" rel="stylesheet">

    <!-- Link do favcon -->
    <link rel="shortcut icon" href="./LOGO/logo-favicon.png" type="image/x-icon">

    <title>{{$produto->PRODUTO_NOME}}</title>
</head>
    <body>

        <!-- Barra de navegação -->
        <header style="margin-bottom: 60px;">
            <!-- Possibilidade de colocar um favcon aqui -->
            <img  src="/img/logoOficialOficial.png" width="10%"class="logo">
                <!-- Favcon -->
                <!-- <i class="ri-home-heart-fill"></i> -->
                <!-- Tex0to -->

            </a>

            <!--Lista para classificar itens contidos dentro do menu-->
            <!--Pode ser editavel-->
            <ul class="navbar">
                <li><a href="/" class="active">Home</a></li>
                <li><a href="#">Mais vendidos</a></li>
                <li>
                <div class="dropdown">
            <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            @foreach(\App\Models\Categoria::all() as $categoria)
                <li>
            <a class="dropdown-item" href="{{route('categoria.show', $categoria->CATEGORIA_ID)}}"> {{$categoria->CATEGORIA_NOME}}</a>
                </li>
                @endforeach
            </ul>
            </div>

                <!-- <li><a href="#">Blog</a></li>
                <li><a href="#">Contato</a></li> -->
                <li><a href="#">Promoções</a></li>
            </ul>
            @if(!Auth::check())
            <div class="main">

                <!-- Arrumar botão transparente de pesquisa -->
                <form action="../produto" class="d-flex" role="search" method="GET">
                    <input class="form-control me-2" type="text" id="search" name="search"  aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="ri-search-line"></i></button>
                  </form>

                <a href="/login" class="user"><i class="ri-user-fill"></i>Login </a>


                <a href="/register" class="user"><i class="ri-user-add-fill"></i>Cadastro</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
            @else

            <div class="main">

                <!-- Arrumar botão transparente de pesquisa -->
                <form action="../produto" class="d-flex" role="search" method="GET">
                    <input class="form-control me-2" type="text" id="search" name="search"  aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="ri-search-line"></i></button>
                  </form>

                  <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Olá, {{Auth::user()->USUARIO_NOME}}
                </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                    <a class="dropdown-item"  href="endereco">Meus Endereços</a>
                        </li>
                        <li>
                    <a class="dropdown-item"  href="pedido">Meus Pedidos</a>
                        </li>
                        <li>
                    <a class="dropdown-item" href="{{route('usuarios.show', Auth::user()->USUARIO_ID)}}">Ver perfil</a>
                        </li>

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button class="buttonsair" onclick="event.preventDefault();this.closest('form').submit();">Sair</button>
                </form>

                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
            </ul>

            @endif
        </header>

        <!-- FIM NAVBAR -->
        <main>@yield('main')</main>
          <!--Floater-->
          <footer>

            <div class="wrapper">
                <div class="footer-box">
                <div class="company-footer">

                    <img class="logo-yyt-log" src="/img/logoOficialOficial.png">
                    <h3>Delta</h3>
                    <p>A loja de esportes mais amada do Brasil</p>

                </div>
            </div>

            <div class="footer-box">
                <div class="articles-footer">

                    <h3>Formas de pagamento</h3>
                    <ul class="footer-list footer-article-list">
                        <li>
                            <!-- <span class="article-date">PIX</span> -->
                            <img class="cardreey" src="/img/cardpix.png">
                        </li>
                        <li>
                            <!-- <span class="article-date">PIX</span> -->
                            <img class="cardreey" src="/img/cardvisa.png">
                        </li>
                        <li>
                            <!-- <span class="article-date">PIX</span> -->
                            <img class="cardreey" src="/img/boleto.jpg">
                        </li>

                    </ul>
                </div>
            </div>

                <div class="footer-box">
                    <h3>Redes Sociais</h3>
                    <ul class="footer-list">
                        <li>
                            <a href="#">
                                <!-- Icon facebook -->
                                <i class="ri-facebook-box-fill"></i>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <!-- Icon Instagram -->
                                <i class="ri-instagram-line"></i>
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <!-- Icon youtube -->
                                <i class="ri-youtube-fill"></i>
                                <span>Youtube</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
            <div class="footer-bottom">
            <div class="wrapper">
                <p>@Delta - 2023</p>
            </div>
            </div>
            </footer>
            <!-- FIM FOOTER -->

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
