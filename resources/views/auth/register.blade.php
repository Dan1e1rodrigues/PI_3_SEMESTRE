<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>

<div>


<form method="POST" action="{{ route('register') }}">

    @csrf

    <div class="login">
        
        <h1>Cadastro</h1>
        <!--Campo input para colocar login/nome-->

        <div>
            <label for="nome">Nome</label>
            <input class="inputLogin" type="text" placeholder="Digite seu nome" id="name" name="name" required>
        </div>

        <div>
        <!--Campo input para colocar senha-->
            <label for="nome">Email</label>
            <input class="inputLogin" type="email" id="email" name="email" placeholder="Digite seu email">
        </div>

        <div>
        <!-- Campo para colocar senha -->
            <label for="senha">Senha</label>
            <input class="inputLogin" type="password" name="password" placeholder="Senha">
        </div>

        <!-- Esse campo não existe -->
        <!-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> -->

        <div>
            <label for="Confirme sua senha">Confirme</label>
            <input class="inputLogin" type="password" placeholder="Confirme sua senha" name="password_confirmation"/>
        </div>

        <div>
            <label for="CPF">CPF</label>
            <input class="inputLogin" id="cpf" class="block mt-1 w-full" type="text" maxlength="11" name="cpf"/>
        </div>

        <button class="buttonLogin">{{ __('Cadastrar') }}</button>

        <p id="texto">Você já tem uma conta? <a href="/login">Fazer login</a></p>
        </div>
        

    </div>

</div>

</body>
</html>
