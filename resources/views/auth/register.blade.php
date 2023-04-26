<x-guest-layout>
@extends('layout.app')
<form method="POST" action="{{ route('register') }}">
        @csrf


    <div class="telalogin">
        <h1>Cadastro</h1>
        <!--Campo input para colocar login/nome-->
        
        <p><label for="nome">Nome</label></p>
        <p><input type="text" placeholder="Digite seu nome" id="name" name="name" required></p>
        
        <!--Campo input para colocar senha-->
        <p><label for="nome">Email</label></p>
        <p><input type="email" id="email" name="email" placeholder="Digite seu email"></p>

        <!-- Campo para colocar senha -->
        <p><label for="senha">Senha</label></p>
        <p><input type="password" name="password" placeholder="Senha"></p>
        
        <!-- Esse campo não existe -->
        <!-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> -->

        <p><label for="Confirme sua senha">Confirme</label></p>
        <p><input type="password" placeholder="Confirme sua senha" name="password_confirmation"/></p>

        <p><label for="CPF">CPF</label></p>
        <p><input id="cpf" class="block mt-1 w-full" type="text" maxlength="11" name="cpf"/><p>

            <x-primary-button class="ml-4">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
        <br><br><br>
        <p id="texto">Você já tem uma conta? <a href="/login">Fazer login</a></p>







</x-guest-layout>
