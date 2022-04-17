<x-app-layout>
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                {{-- <x-jet-authentication-card-logo /> --}}
            </x-slot>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 ">
                <div class="alselcent">
                    <div class="flex items-center justify-center text-center pb-6 ">
                        <div>
                            <x-jet-authentication-card-logo />
                        </div>
                        <div>
                            <p class="ml-4 text-xl md:text-3xl  text-left font-bold">Restablecer <br>tu
                                contraseña </p>
                        </div>
                    </div>
            <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="block">
                            {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                            <x-jet-input id="email" class="block mt-1 w-full inptvrd" type="email" name="email"
                                :value="old('email', $request->email)" required autofocus />
                        </div>

                        <div class="mt-4">
                            {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                            <x-jet-input id="password" class="block mt-1 w-full inptvrd" placeholder="Nueva contraseña"
                                type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <div class="mt-4">
                            {{-- <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
                            <x-jet-input id="password_confirmation" class="block mt-1 w-full inptvrd"
                                placeholder="Confirmar nueva contraseña" type="password" name="password_confirmation"
                                required autocomplete="new-password" />
                        </div>

                        <div class="mt-4 w-full">
                            <x-jet-button class="d-blck w-full text-center">
                                {{ __('Reset Password') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
                <div class="jtifyend">
                    <img src="{{ asset('images/login_user/fondo.png') }}" width="w-full" alt="">
                </div>
            </div>
        </x-jet-authentication-card>
    </x-guest-layout>
</x-app-layout>
