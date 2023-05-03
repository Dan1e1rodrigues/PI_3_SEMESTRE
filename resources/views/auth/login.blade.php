
<!-- Estatus da sessão -->
<x-guest-layout>
    <!-- Session Status -->
    <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Input de email -->
        <!-- Email Address -->
        <div class="telalogin">
            <p><label for="email">Email</label></p>
            <!-- Alterar esse BR futuramente -->
            <!-- <br> -->
            <p><input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"/></p>
            
            <br>
            
        <!-- Input de senha -->
        <!-- Password -->
            <p><label for="password">Senha</label></p>
            <p><input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" /></p>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        
            <br>
        <!-- TEXTo lembrar senha -->
        <!-- Remember Me -->
            <p><label for="remember_me" class="inline-flex items-center"><p>

                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-200" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Lembre-me') }}</span>
            </label>
        
            <br>

            @if (Route::has('password.request'))
            <p>
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            </p>
        
            @endif

            <br>
            <button class="ml-3">
                {{ __('Login') }}
            </button>

        </div>
    </form>
</x-guest-layout>

