<x-guest-layout>
<<<<<<< HEAD
    <form method="POST" action="{{ route('register') }}">
        @csrf <!--questão de segurança para outras praginas nao postarem aqui-->

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
=======
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






 
>>>>>>> main
</x-guest-layout>
