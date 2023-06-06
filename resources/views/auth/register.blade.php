<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/cadastro.css">
    <title>Cadastro</title>
    <script>

function semLetra(a){
  var x= a.which || e.keycode;
  if ((x>=48 && x<=57) || (x==44))
  {
    return true;
  }else{
    return false;
  }
}

      
</script>

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
            <input class="inputLogin" type="email" id="email" name="email" placeholder="Digite seu email" required> 
        </div>

        <div>
        <!-- Campo para colocar senha -->
            <label for="senha">Senha</label>
            <input class="inputLogin" type="password" name="password" placeholder="Senha" required>
        </div>

        <!-- Esse campo não existe -->
        <!-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> -->


        <div>
            <label for="CPF">CPF</label>
            <input class="inputLogin" id="cpf" class="block mt-1 w-full" type="text" minlength="11" maxlength="11" onkeypress="return semLetra(event)" name="cpf"/>
        </div>

        <button class="buttonLogin" >{{ __('Cadastrar') }}</button>

        <p id="texto">Você já tem uma conta? <a href="/login">Fazer login</a></p>
        </div>
        

    </div>

</div>

</body>
</html>
