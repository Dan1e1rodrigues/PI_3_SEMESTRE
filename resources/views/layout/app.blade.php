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
            <img  src="/img/logoOficial.png" width="10%"class="logo">
                <!-- Favcon -->
                <!-- <i class="ri-home-heart-fill"></i> -->
                <!-- Tex0to -->

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
<<<<<<< HEAD
                
                <a href="../LOGIN/index.html" class="user"><i class="ri-user-fill"></i>Fazer Login</a>
=======

                <a href="/login" class="user"><i class="ri-user-fill"></i>Fazer Login</a>
>>>>>>> main

                <a href="/register" class="bxmenu">Criar conta</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
            @else
            
            
            <div class="main">

                <!-- Arrumar botão transparente de pesquisa -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search"  aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="ri-search-line"></i></button>
                  </form>

                <span class="user"><i class="ri-user-fill"></i>Olá, {{Auth::user()->USUARIO_NOME}}</span>

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
          <!--Floater-->
  <div id="floater">
                <h2>Delta</h2>
                <input type="text" placeholder="Nome">
                <input type="email" placeholder="Email">
                <button id="email">Enviar</button>
                <br><br>

                <h2>Contato</h2>
                <ul>
                  <li>rodriguesdeaguiardaniel@gmail.com</li>
                  <li>joao@gmail.com</li>
                </ul>

                <img  src="/img/logoOficial.png" width="10%">
              </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
