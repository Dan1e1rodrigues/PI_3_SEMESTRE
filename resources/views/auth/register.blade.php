<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="telalogin">
            <p><label for="name">Nome</label></p>
            
            <p><input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"></input></p>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <br>
        <!-- Email Address -->
            <p><label for="email" :value="__('Email')">Email</label></p>
            
            <p><input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" /></p>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <br>
        <!-- Password -->
            <p><label for="password" :value="__('Password')">Senha</label></p>
            
            <p><input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password"></input></p>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <br>
        <!-- Confirm Password -->
            <p><label for="password_confirmation" :value="__('Confirm Password')">Confirmar</label></p>
            
            <p><input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"></input></p>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            <br>

            <p class="registro"><a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Já registrado?') }}
            </a></p>

            <br>

            <p>
                <button class="ml-3">
                {{ __('Registrar') }}
                </button>
            </p>

        </div>

    </form>
</x-guest-layout>
