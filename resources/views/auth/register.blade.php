<!-- <x-guest-layout> -->
@extends('layout.app')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="telalogin">
        <h1>Cadastro</h1>
        <!--Campo input para colocar login/nome-->

        <div>
            <label for="nome">Nome</label>
            <input type="text" placeholder="Digite seu nome" id="name" name="name" required>
        </div>

        <div>
        <!--Campo input para colocar senha-->
            <label for="nome">Email</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email">
        </div>

        <div>
        <!-- Campo para colocar senha -->
            <label for="senha">Senha</label>
            <input type="password" name="password" placeholder="Senha">
        </div>

        <!-- Esse campo não existe -->
        <!-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> -->

        <div>
            <label for="Confirme sua senha">Confirme</label>
            <input type="password" placeholder="Confirme sua senha" name="password_confirmation"/>
        </div>

        <div>
            <label for="CPF">CPF</label>
            <input id="cpf" class="block mt-1 w-full" type="text" maxlength="11" name="cpf"/>
        </div>

        <button class="ml-4">{{ __('Cadastrar') }}</button>
        </div>
        <br>
        <p id="texto">Você já tem uma conta? <a href="/login">Fazer login</a></p>

    </div>







</x-guest-layout>

