<x-app-layout>
    <div class="container my-10">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8 ">
            <div class="mx-6 md:mx-0">
                <p class="my-4 text-2xl font-bold">Contáctanos:</p>
                <form action="{{ route('contacto.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <input name="name"
                            class="w-full bg-gray-50 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Nombres*" />
                        @error('name')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                        <input name="Apellidos"
                            class="w-full bg-gray-50 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Apellidos*" />
                        @error('Apellidos')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                        <input name="correo"
                            class="w-full bg-gray-50 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="email" placeholder="Correo electrónico*" />
                        @error('correo')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                        <input name="celular"
                            class="w-full bg-gray-50 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="number" placeholder="Teléfono*" />
                        @error('celular')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                    <div class="my-4">
                        <textarea name="mensaje" placeholder="Mensaje*"
                            class="w-full h-32 bg-gray-50 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"></textarea>
                        @error('mensaje')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                    <div class="my-2  text-right">
                        <button type="submit"
                            class="font-bold tracking-wide bg-gray-700 hover:bg-gray-600 text-gray-50 rounded-lg px-4 py-2   
                          focus:outline-none focus:shadow-outline">
                            Enviar
                        </button>
                    </div>
                </form>

            </div>
            <div>
                <div class="grid grid-cols-2 text-center " >
                    <div class=" border-r-2 border-gray-500 border-b-2 border-opacity-10 py-4">
                        <div>
                            <i class="fas fa-map-marker-alt font-24"></i>
                            <h1 class="font-bold text-sm lg:text-base">Dirección</h1>
                            <p class="text-xs lg:text-base">Av. Canada 3770 - San Luis</p>
                        </div>
                    </div>
                    <div class="border-gray-500 border-b-2 border-opacity-10 py-4">
                        <div>
                            <i class="fas fa-mobile-alt font-24"></i>
                            <h1 class="font-bold text-sm lg:text-base">Celular</h1>
                            <p class="text-xs lg:text-base">987 654 321</p>
                            <p class="text-xs lg:text-base">998 905 385</p>
                        </div>
                    </div>
                    <div class=" border-r-2 border-gray-500 border-opacity-10 py-4">
                        <div>
                            <i class="fas fa-phone font-24"></i>
                            <h1 class="font-bold text-sm lg:text-base">Teléfono</h1>
                            <p class="text-xs lg:text-base">(01) 436 6643</p>
                        </div>
                    </div>
                    <div class="py-4">
                        <div>
                            <i class="fas fa-map-marker-alt font-24"></i>
                            <h1 class="font-bold text-sm lg:text-base">Email</h1>
                            <p class="text-xs lg:text-base">Ventas@pomalca.com.pe</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mapa_contacto px-2 md:px-8 ">
        <iframe class="img_prodct_Detalle"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.7389826192025!2d-77.10558468483653!3d-12.0614716914575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cbe1f1e721e7%3A0x9347134c0c78dd7c!2sCalle%2053B%2C%20Bellavista%2007011!5e0!3m2!1ses!2spe!4v1627609613218!5m2!1ses!2spe"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif


</x-app-layout>
