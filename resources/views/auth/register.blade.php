<x-guest-layout>
<form method="POST" action="{{ route('register') }}">
        @csrf


    <div class="telalogin">
        <h1>Cadastro</h1>
        <!--Campo input para colocar login/nome-->
        <br><br>
        <x-input-label for="nome" :value="__('Nome')" />
        <input type="text" placeholder="Digite seu nome" id="name" name="name"  required  >
        <br><br>
        <!--Campo input para colocar senha-->
        <x-input-label for="nome" :value="__('Email')" />
        <input type="email" id="email" name="email" placeholder="Digite seu email">
        <br><br>
        <div>
        <x-input-label for="senha" :value="__('Senha')" />
        <input type="password" name="password"  placeholder="Senha" >
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <br>

        <x-input-label for="Confirme sua senha" :value="__('Confirme sua senha')" />
        <input type="password" placeholder="Confirme sua senha"  name="password_confirmation"  />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <br><br>

        <x-input-label for="CPF" :value="__('CPF')" />

            <x-text-input id="cpf" class="block mt-1 w-full"
                type="text" maxlength="11"
                name="cpf" />

       <br><br>
            <x-primary-button class="ml-4">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
        <br><br><br>
        <p id="texto">Você já tem uma conta? <a href="/login">Fazer login</a></p>






 
</x-guest-layout>
