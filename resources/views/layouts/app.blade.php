<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- fontawesone --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- glider --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css"
        integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- FLEXslider --}}
    <link rel="stylesheet" href="{{ asset('vendor/flexSlider/flexslider.css') }}">
    {{-- Animate css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- Botman --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    @stack('link')
    @livewireStyles
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    {{-- glider --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js"
        integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- flexslider --}}
    <script src="{{ asset('vendor/flexSlider/jquery.flexslider-min.js') }}"></script>
</head>

<body class="font-sans antialiased ">
    <x-jet-banner />

    <div class="min-h-screen bg-white">
        @livewire('navigation')


        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @livewire('footer')


        <div class="bg-gradient  mt-8 py-2 posfixd foot_sharp_usr ">
            <div class="container flex justify-between">

                <div class="mx-4 ">
                    <a href="{{ route('shopping-cart') }}">
                        @livewire('dropdown-cart')
                    </a>

                </div>
                <div class="mx-4">
                    <div class="mx-6 relative ">
                        @auth
                            <x-jet-dropdown margintop="m56" align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('orders.index') }}">
                                        Mis ordenes
                                    </x-jet-dropdown-link>
                                    @role('admin')
                                        <x-jet-dropdown-link href="{{ route('admin.index') }}">
                                            Administrador
                                        </x-jet-dropdown-link>
                                    @endrole


                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                                                                                  this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        @else
                            <x-jet-dropdown margintop="m32" align="right" width="48">
                                <x-slot name="trigger">
                                    <i class="fas fa-user-circle text-white text-3xl cursor-pointer filt_imggriss"></i>
                                </x-slot>
                                <x-slot name="content">
                                    <x-jet-dropdown-link href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </x-jet-dropdown-link>

                                </x-slot>
                            </x-jet-dropdown>
                        @endauth

                    </div>
                </div>
            </div>
        </div>


    </div>

    @stack('modals')

    @livewireScripts
    <script>
        function dropdown() {
            return {
                open: false,
                show() {
                    if (this.open) {
                        //se cierra el menu
                        this.open = false;
                        document.getElementsByTagName('html')[0].style.overflow = "auto"
                    } else {
                        //Esta abriendo el menu
                        this.open = true;
                        document.getElementsByTagName('html')[0].style.overflow = "hidden"
                    }

                },
                close() {
                    this.open = false;
                    document.getElementsByTagName('html')[0].style.overflow = "auto"
                }
            }
        }
    </script>
    @stack('script')
    <script src="{{ asset('plugin/scrollflow/eskju.jquery.scrollflow.min.js') }}"></script>

    {{-- <script>
        var botmanWidget = {
            title: 'Asesor de Alecka',

            introMessage: 'Hola, soy tu asesor de ventas! Te asistiré para que puedas tener la mejor propuesta dentro de tus posibilidades.',
            mainColor: '#04214D',
            aboutText: '',
            bubbleBackground: '#04214D',
            headerTextColor: '#fff',
        };
    </script> --}}

    {{-- <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> --}}
    {{-- <script>
        $(document).on('click', '.desktop-closed-message-avatar img', function() {
            var iframe = document.getElementById("chatBotManFrame");
            iframe.addEventListener('load', function() {
                var htmlFrame = this.contentWindow.document.getElementsByTagName("html")[0];
                var bodyFrame = this.contentWindow.document.getElementsByTagName("body")[0];
                var headFrame = this.contentWindow.document.getElementsByTagName("head")[0];

                var image =
                    "https://images.unsplash.com/photo-1501597301489-8b75b675ba0a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80"

                htmlFrame.style.backgroundImage = "url(" + image + ")";
                bodyFrame.style.backgroundImage = "url(" + image + ")";
            });
        });
    </script> --}}
</body>

</html>
