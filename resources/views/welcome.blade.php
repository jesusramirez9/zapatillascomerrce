<x-app-layout>


    @push('link')
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @endpush
    <div>
        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
            style="background-image: url('{{ asset('img/slide/pichu.jpg') }}')">

        </div>
        <div class="bg-black">
            <div class="container flex justify-center py-2 ">
                <p class=" text-white font-medium uppercase">¡Un mundo de maravillas por <span
                        class="text-yellow-600 font-medium">DESCUBRIR!</span></p>
            </div>
        </div>
    </div>

    <div class="my-6 md:my-14">
        <p class="text-center text-xl md:text-3xl tracking-wide">Es hora de ponerte en marcha</p>
    </div>
    <div class="bg-gray-100 py-10">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 xl:gap-16 ">
                @foreach ($products as $product)
                    <div class="shadow-xl  mx-8 md:mx-0 bg-white">
                        <figure class="relative">
                            <div class="absolute z-30 mt-4 ml-4">
                                @if ($product->offer == 0)
                                @else
                                    <div class="bg-red-600 text-white px-1 py-1 w-16 rounded-lg z-50">
                                        <p class="text-center text-sm font-semibold">
                                            -
                                            {{ intval((($product->offer - $product->price) / $product->offer) * 100) }}
                                            %
                                        </p>
                                    </div>
                                @endif
                            </div>
                            @if ($product->images->count())
                                <img class="h-80 w-full object-cover object-center scrollflow -slide-bottom -opacity"
                                    src="{{ Storage::url($product->images->first()->url) }}" alt="">
                            @else
                                <img class="h-80 w-full object-cover object-center"
                                    src="https://images.pexels.com/photos/5082560/pexels-photo-5082560.jpeg?cs=srgb&dl=pexels-cottonbro-5082560.jpg&fm=jpg"
                                    alt="">
                            @endif

                        </figure>
                        <a href="{{ route('products.show', $product) }}" class="">
                            <div class="py-2 px-2 bg-white">
                                <p class="text-gray-400 font-medium text-xs text-center uppercase">
                                    {{ $product->subcategory->name }}</p>
                                <h1 class="text-lg  text-center font-semibold scrollflow -slide-bottom -opacity">
                                    {{ Str::limit($product->name, 40, '...') }}
                                </h1>
                                <p class="mb-5 text-gray-600 font-medium text-center"> Oferta: S/. 
                                    <span class="font-bold text-xl text-center text-black scrollflow -slide-bottom -opacity">
                                         {{ $product->price }} </span> x Persona
                                </p>
                                @if ($product->offer != 0)
                                    <p class="text-center text-gray-400 line-through">Precio regular: s/ {{ $product->offer }} 
                                    </p>
                                @else
                                @endif
                                <div class="flex justify-center py-4">
                                    <button
                                        class="inline-block py-2 px-7 border border-[#d18916] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-orange-600 transition"><i
                                            class="fa fa-shopping-cart mr-2"></i>Ver tour</button>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <div class="my-10 md:my-14">
            <p class="text-center text-xl md:text-2xl font-semibold tracking-wide">3 pasos de vivir una experiencia única</p>
            <p class="italic text-center text-2xl md:text-3xl font-semibold mt-5">
                Piensa en nosotros como tu guía. Nuestro equipo de expertos y recursos de la industria turística te
                guiará a través de cada etapa viajera.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-6 lg:gap-10 xl:gap-16 xl:my-16 mx-6 md:mx-0">
            <div>
                <div class="h-96 w-full object-center bg-center bg-cover rounded-2xl"
                    style="background-image: url('{{ asset('img/otros/guia.jpg') }}')">

                </div>
            </div>
            <div class="text-justify">
                <div class="mb-6">
                    <h1 class="text-lg font-semibold">Guías turistica</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut ab odit facilis quis minus ipsa
                        nihil, praesentium consequatur, distinctio modi ex repudiandae iste molestias, corrupti impedit
                        maiores temporibus suscipit maxime.</p>
                </div>
                <div class="mb-6">
                    <h1 class="text-lg font-semibold">Asistencia y apoyo</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut ab odit facilis quis minus ipsa
                        nihil, praesentium consequatur, distinctio modi ex repudiandae iste molestias, corrupti impedit
                        maiores temporibus suscipit maxime.</p>
                </div>
                <div>
                    <h1 class="text-lg font-semibold">Medidas de seguridad</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut ab odit facilis quis minus ipsa
                        nihil, praesentium consequatur, distinctio modi ex repudiandae iste molestias, corrupti impedit
                        maiores temporibus suscipit maxime.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-100 pb-6 lg:pb-14 mt-8">
        <div class="container">
            <div class="py-14">
                <p class="text-center text-2xl tracking-wide font-serif font-medium ">BLOG VIAJERO</p>
            </div>
            <div class="mx-6 md:mx-0">
                <img src="{{ asset('img/blog/blog1.jpg') }}" alt="">
                <h1 class="mt-4 text-xl font-semibold">BIENVENIDOS A NUESTRO BLOG VIAJERO</h1>
                <p class="text-gray-700 mt-4">Estamos felices de contarles sobre esta nueva etapa que combina calidad de
                    servicio y tecnología en nuestra nueva plataforma de e-commerce, aquí encontrarán diversos tipos de
                    servicios turísticos diseñados especialmente para ustedes.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 mt-10 lg:mt-14 gap-6 lg:gap-8 xl:gap-14 mx-6 md:mx-0">
                <div>
                    <div>
                        <img src="{{ asset('img/blog/kuelap.jpg') }}" alt="">
                        <h1 class="mt-4 text-xl font-semibold">EL OTRO MACHU PICCHU, KUELAP</h1>
                        <div class="py-5">
                            <p class="text-sm">16 Marzo 2022</p>

                        </div>
                        <p class="text-justify">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error amet aperiam ex odio, quis
                            itaque, soluta enim aut dicta adipisci iure ullam alias nam saepe quam quasi. Est, nesciunt
                            quas? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias animi quibusdam,
                            dolore hic doloremque eligendi amet pariatur quae quas, nostrum iure tempora suscipit neque
                            ipsa ab libero natus sint reiciendis!
                        </p>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="{{ asset('img/blog/paracas.jpg') }}" alt="">
                        <h1 class="mt-4 text-xl font-semibold">5 MOTIVOS POR LOS CUALES DEBES VISITAR PERÚ</h1>
                        <div class="py-5">
                            <p class="text-sm">16 Marzo 2022</p>

                        </div>
                        <p class="text-justify">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error amet aperiam ex odio, quis
                            itaque, soluta enim aut dicta adipisci iure ullam alias nam saepe quam quasi. Est, nesciunt
                            quas? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias animi quibusdam,
                            dolore hic doloremque eligendi amet pariatur quae quas, nostrum iure tempora suscipit neque
                            ipsa ab libero natus sint reiciendis!
                        </p>
                    </div>
                </div>
            </div>
            <p class="text-center text-xs mt-8 cursor-pointer hover:text-orange-600 hover:underline"><i
                    class="fa-solid fa-arrow-right mx-3 bg-orange-300 p-2 rounded-full"></i> Ver mas publicaciones</p>
        </div>
    </div>
    <div>
        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
            style="background-image: url('{{ asset('img/otros/baner.jpg') }}')">
            <div class="container text-center mx-auto py-40">
                <p class="text-white text-3xl font-semibold">¡Nuestro compromiso es tu viaje soñado <br>
                    y nuestra recompensa tu <br>
                    agradecimiento!</p> <br>
                <i class="fa-solid fa-bahai fa-3x text-white hover:text-orange-300"></i>
            </div>
        </div>

    </div>
    <div class="container mt-6 lg:mt-8">
        <p class="text-3xl font-bold text-center">¿Quienes Somos? <br class="block md:hidden"> <span class="text-orange-500 font-serif underline">
                Alecka Travel Tours</span></p>
        <div class="mt-6 lg:mt-8">
            <img src="{{ asset('img/otros/exper.png') }}" alt="">
        </div>
        <p class="text-center italic text-gray-400 mt-4 lg:mt-6 mx-6 md:mx-0">
            Somos un equipo sólido de profesionales con mas de 5 años de experiencia en el rubro del turismo brindando
            la mejor experiencia en cada uno de sus tours y full days. En Vive Ya Travel nos encargamos de que durante
            todo el recorrido los servicios prestados en cada uno de los lugares visitados sean confiables garantizando
            un día lleno de aventura. Nuestro objetivo es satisfacer y superar las expectativas y necesidades de
            nuestros clientes, ofreciendo un servicio de calidad incluyendo el valor agregado del compromiso, nuestros
            clientes ya disfrutaron de un día inolvidable, y tú ¿Qué esperas?
        </p>
    </div>







    @push('script')
    @endpush

</x-app-layout>
