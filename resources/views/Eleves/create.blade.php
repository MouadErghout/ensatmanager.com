<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="/Eleve">
            @csrf

            <!-- Nom -->
            <div class="mt-4">
                <x-input-label for="nom" :value="__('Nom')" />
                <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus />
                <x-input-error :messages="$errors->get('nom')" class="mt-2" />
            </div>

            <!-- Prenom -->
            <div class="mt-4">
                <x-input-label for="prenom" :value="__('Prenom')" />
                <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('Prenom')" required autofocus />
                <x-input-error :messages="$errors->get('Prenom')" class="mt-2" />
            </div>

            <!-- Code -->
            <div class="mt-4">
                <x-input-label for="code" :value="__('Code')" />
                <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')" required autofocus />
                <x-input-error :messages="$errors->get('code')" class="mt-2" />
            </div>

            <!-- Filiere -->
            <div class="mt-4">
                <x-input-label for="filiere" :value="__('Filiere')" />
                <x-text-input id="filiere" class="block mt-1 w-full" type="text" name="filiere" :value="old('filiere')" required autofocus />
                <x-input-error :messages="$errors->get('filiere')" class="mt-2" />
            </div>

            <!-- Niveau -->
            <div class="mt-4">
                <x-input-label for="niveau" :value="__('Niveau')" />
                <x-text-input id="niveau" class="block mt-1 w-full" type="text" name="niveau" :value="old('niveau')" required autofocus />
                <x-input-error :messages="$errors->get('niveau')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
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
                              name="password_confirmation" required />

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
    </x-auth-card>
</x-guest-layout>
