<x-guest-layout>
@extends('layout.app')
<form method="POST" action="{{ route('register') }}">
        @csrf


    <div class="telalogin">
        <h1>Cadastro</h1>
        <!--Campo input para colocar login/nome-->
        <br><br>
        <label for="nome">Nome</label>
        <input type="text" placeholder="Digite seu nome" id="name" name="name"  required  >
        <br><br>
        <!--Campo input para colocar senha-->
        <label for="nome">Email</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email">
        <br><br>
        <!-- Campo para colocar senha -->
        <label for="senha">Senha</label>
        <input type="password" name="password"  placeholder="Senha" >
        <br><br>
        <!-- Esse campo não existe -->
        <!-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> -->
        <br><br>
        <label for="Confirme sua senha">Confirme sua senha</label>
        <input type="password" placeholder="Confirme sua senha"  name="password_confirmation"  />
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
