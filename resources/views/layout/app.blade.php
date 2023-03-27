<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" type="text/css" href="index.css" media="screen"/>

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
            <a href="#" class="logo">
                <!-- Favcon -->
                <!-- <i class="ri-home-heart-fill"></i> -->
                <!-- Tex0to -->
                <span>DELTA</span>
            </a> 

            <!--Lista para classificar itens contidos dentro do menu-->
            <!--Pode ser editavel-->
            <ul class="navbar">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Mais vendidos</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Promoções</a></li>
            </ul>

            <div class="main">

                <!-- Arrumar botão transparente de pesquisa -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search"  aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="ri-search-line"></i></button>
                  </form>

                <a href="../LOGIN/index.html" class="user"><i class="ri-user-fill"></i>Fazer Login</a>

                <a href="../CADASTRO/index.html" class="bxmenu">Criar conta</a>
                <div class="bx bx-menu" id="menu-icon"></div> 
            </div>
        </header>
        <!-- FIM NAVBAR -->