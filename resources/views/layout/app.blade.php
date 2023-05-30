<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Icone na aba da tela -->
    <!-- <link rel="shortcut icon" href="{{ asset('logoOficial.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('logoOficial.png') }}" type="image/x-icon"> -->

    <!-- Link CSS -->
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

    <title>Delta</title>
</head>
    <body>

        <!-- Barra de navegação -->
        <header>
            <!-- Possibilidade de colocar um favcon aqui -->
            <img  src="/img/logoOficialOficial.png" width="10%"class="logo">
            </a>

            <!--Lista para classificar itens contidos dentro do menu-->
            <!--Pode ser editavel-->
            <ul class="navbar">
                <li><a href="/" class="active">Home</a></li>
                <li><a href="#">Mais vendidos</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Promoções</a></li>
            </ul>
            @if(!Auth::check())
            <div class="main">

                <!-- Arrumar botão transparente de pesquisa -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search"  aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="ri-search-line"></i></button>
                  </form>

                <a href="/login" class="user"><i class="ri-user-fill"></i>Fazer Login</a>

                <a href="/register" class="user"><i class="ri-user-add-line"></i>Criar conta</a>
                <!-- <div class="bx bx-menu" id="menu-icon"></div> -->
            </div>
            @else
            
            <!-- Navbar logado -->
            <div class="main">

                <!-- Arrumar botão transparente de pesquisa -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search"  aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="ri-search-line"></i></button>
                  </form>

                <span class="user"><i class="ri-user-fill"></i>Ola, {{Auth::user()->USUARIO_NOME}}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button onclick="event.preventDefault();this.closest('form').submit();">Sair</button>
                </form>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
            @endif
        </header>
        <!-- FIM NAVBAR -->

        <main>@yield('main')</main>

            <!--Footer-->
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

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">

     </script>

    </body>
</html>
