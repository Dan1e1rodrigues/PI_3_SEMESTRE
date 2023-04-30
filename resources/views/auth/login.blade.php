<link rel="stylesheet" href="http://127.0.0.1:8000/css/login.css">

<<<<<<< Updated upstream
<x-guest-layout>
=======
<body>
<!-- Estatus da sessão -->

>>>>>>> Stashed changes
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
<<<<<<< Updated upstream
<div class="funfa">>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
=======

        <!-- Input de email -->
        <div class="telaemail">

            <p><label for="email">Email</label></p>
            <p><input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"></p>
            <!-- Removido -->
            <!-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> -->

        <!-- Input de senha -->
            <p><label for="password">Senha</label></p>
            <p><input id="password" class="block mt-1 w-full"
>>>>>>> Stashed changes
                            type="password"
                            name="password"
                            required autocomplete="current-password"/></p>

            <!-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> -->

<<<<<<< Updated upstream
=======
        <!-- Textoo lembrar senha -->
>>>>>>> Stashed changes
        <!-- Remember Me -->
        
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
       
            <p></p>
        <!-- <div class="flex items-center justify-end mt-4"> -->
            @if (Route::has('password.request'))
<<<<<<< Updated upstream
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
=======
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" style="text-align:right;">
                    {{ __('Esqueceu sua senha?') }}
>>>>>>> Stashed changes
                </a>
            @endif

            <p></p>
            <!-- Não remover esse "x-primary" pois ele manda para a tela de Redefinição de senha -->
            <x-primary-button class="ml-3">
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>
<<<<<<< Updated upstream
</div>
</x-guest-layout>
=======

</body>
>>>>>>> Stashed changes
