<x-app-layout>


    <div class="container  py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-24 " >
            <div>
                <!-- Place somewhere in the <body> of your page -->
                {{-- <div class="md:mt-0 mb-3">
                    <p class=""> {{$product->subcategory->name}} <i class="fas fa-arrow-right ml-4 mr-4"></i> <span class="">{{ $product->name }}</span> </p>
                </div> --}}
                <div class="flexslider">
                    <ul class="slides">

                        @foreach ($product->images as $image)
                            <li class="" data-thumb="{{ Storage::url($image->url) }}">
                                <img class="" src="{{ Storage::url($image->url) }}" />
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <div class="-mt-8 md:mt-12">
                <p class="text-base mb-4 mx-6 md:mx-0">Calificación: {{ round($product->reviews->avg('rating'), 1) }} <i
                        class="fas fa-star text-yellow-400 "></i></p>
                <p class="mb-4 uppercase mx-6 md:mx-0"> <i class="fas fa-arrow-right mr-4"></i> <span class="">
                        {{ $product->subcategory->name }}</span> </p>

                <h1 class=" font-bold text-3xl mx-6 md:mx-0"> {{ $product->name }}</h1>
                <div class="flex mt-4 mx-6 md:mx-0">

                    <a class="underline hover:text-orange-600" href="#resña">{{ count($product->reviews) }}
                        comentarios
                        de nuestros clientes</a>
                </div>
                <div class="flex items-center mx-6 md:mx-0">
                    <p class="text-2xl my-4 font-semibold "><span class="text-xs">S/</span>
                        {{ $product->price }}</p>
                    <div class="mx-4">
                        @if ($product->offer != 0)
                            <p class=" text-gray-300 line-through">S/ {{ $product->offer }}</p>
                        @else
                        @endif
                    </div>
                </div>
                <div class="text-justify normal-case mb-4">
                    {{-- <p>{!! $product->description !!}</p> --}}
                </div>
                {{-- <div class="bg-white rounded-lg shadow-lg mb-6 ">
                    <div class="flex p-4 items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-greenLime-600">
                            <i class="fas fa-truck text-sm text-white"></i>
                        </span>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-greenLime-600">Se hace envíos a todo el Perú</p>
                            <p>Recíbelo el {{ Date::now()->addDay(7)->locale('es')->format('l j F') }}</p>
                        </div>
                    </div>
                </div> --}}

                @if ($product->subcategory->size)
                    @livewire('add-cart-item-size', ['product' => $product])
                @elseif($product->subcategory->color)
                    @livewire('add-cart-item-color', ['product' => $product])
                @else
                    @livewire('add-cart-item', ['product' => $product])
                @endif
            </div>
        </div>
        <div class="container mt-5 md:mt-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 shadow-xl p-4 md:p-6  divide-gray-500  divide-opacity-20">
                <div>
                    <p class="text-justify">
                        {!! $product->specification !!}
                    </p>
                </div>
                <div >
                    <p class="text-justify">{!! $product->description !!}</p>
                </div>
            </div>
            
        </div>

        {{-- <div class="">
            <div class="mt-0 md:mt-8">
                <div class="mytabs">
                    <input type="radio" name="mytabs" id="tabfree" checked="checked">
                    <label for="tabfree" class=" underlinetxt">Descripción</label>
                    <div class="tab">

                        <p>{!! $product->description !!}</p>
                    </div>

                    <input type="radio" name="mytabs" id="tabsilver">
                    <label for="tabsilver" class=" underlinetxt">Especificaciones</label>
                    <div class="tab">

                        <p>{!! $product->specification !!}</p>
                    </div>
                </div>
            </div>
        </div> --}}


        <div class="text-center ">
            <div class="text-center py-8 md:py-8 lg:py-14">
                <p class="text-lg md:text-2xl ">Más modelos encontrados en mi EMPRESA | <span
                        class="text-black font-semibold text-xl lg:text-2xl">{{ $product->subcategory->name }}</span>
                </p>
            </div>

            <div class="glider-contain">
                <div class="prelacionado">
                    @foreach ($subcategories as $subcategory)
                        @foreach ($subcategory->products as $product)
                            <div class="mx-4 border-2 overflow-hidden border-gray-300 rounded-xl">
                                <figure>

                                    @if ($product->images->count())
                                        <img class="h-80 w-full object-cover object-center scrollflow -slide-bottom -opacity"
                                            src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                    @else
                                        <img class="h-80 w-full object-cover object-center"
                                            src="https://images.pexels.com/photos/5082560/pexels-photo-5082560.jpeg?cs=srgb&dl=pexels-cottonbro-5082560.jpg&fm=jpg"
                                            alt="">
                                    @endif

                                </figure>
                                <a href="{{ route('products.show', $product) }}">
                                   
                                    <div class="py-2 px-2">
                                        <p class="text-gray-400 font-medium text-xs text-center uppercase">
                                            {{ $product->subcategory->name }}</p>

                                        <h1
                                            class="text-lg  text-center font-semibold scrollflow -slide-bottom -opacity">

                                            {{ Str::limit($product->name, 40, '...') }}

                                        </h1>
                                        <p class="font-bold text-center text-red-600 scrollflow -slide-bottom -opacity">
                                            S/ {{ $product->price }}</p>
                                        @if ($product->offer != 0)
                                            <p class="text-center text-gray-300 line-through">s/ {{ $product->offer }}
                                            </p>
                                        @else
                                        @endif
                                        <div class="flex justify-center py-4">
                                            <button
                                                class="text-white add_prod font-medium text-sm bg_pricipal px-5 py-2 rounded-xl"><i
                                                class="fa-solid fa-magnifying-glass mr-2"></i>Ver</button>
                                        </div>


                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endforeach
                </div>
                <button aria-label="Previous" class="glider-prev glid-img1"></button>
                <button aria-label="Next" class="glider-next glid-img2"></button>

            </div>

        </div>
        

        <div>
            <a name="resña"></a>
            @livewire('products-reviews', ['product' => $product])
        </div>

    </div>
    @push('script')
        <script>
            // Can also be used with $(document).ready()
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });

            new Glider(document.querySelector('.prelacionado'), {
                slidesToShow: 3,
                slidesToScroll: 1,
                draggable: true,
                dots: '.dots',
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                },
                responsive: [{
                        // screens greater than >= 775px
                        breakpoint: 768,
                        settings: {
                            // Set to `auto` and provide item width to adjust to viewport
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            itemWidth: 150,
                            duration: 1.5
                        }
                    },

                    {
                        // screens greater than >= 1024px
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            itemWidth: 150,
                            duration: 1.5,
                            arrows: {
                                prev: '.glider-prev',
                                next: '.glider-next'
                            },

                        }
                    },
                    {
                        // screens greater than >= 1024px
                        breakpoint: 1250,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            itemWidth: 150,
                            duration: 1.5,
                            arrows: {
                                prev: '.glider-prev',
                                next: '.glider-next'
                            },

                        }
                    },
                    {
                        // screens greater than >= 1024px
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            itemWidth: 150,
                            duration: 0.25,
                            arrows: false
                        }
                    },
                    {
                        // screens greater than >= 1024px
                        breakpoint: 320,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            itemWidth: 150,
                            duration: 0.25,
                            arrows: false
                        }
                    }

                ]
            });
        </script>
    @endpush
</x-app-layout>
