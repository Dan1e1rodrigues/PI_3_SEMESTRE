<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <img id="logoLogin" src="/img/logoOficial.png" width="10%"  class="w-20 h-20 fill-current text-gray-500" />
    <div class="telalogin">

        <h1>Login</h1>
        <!--Campo input para colocar login/nome-->
        <input type="email" placeholder="Login:"  name="email" :value="old('email')" required autofocus autocomplete="username">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <br><br>
        <!--Campo input para colocar senha-->
        <input type="password" placeholder="Senha:" name="password" required autocomplete="current-password">
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <br><br>
        <div>
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Me lembre') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>
    </div>
    <p id="texto">Caso não possua uma conta, <a href="/register">Criar</a></p>
        <div class="block mt-4">




</x-guest-layout>
