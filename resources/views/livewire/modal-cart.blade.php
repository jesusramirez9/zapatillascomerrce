<div>
    <ul class="text-gray-500">
        @forelse (Cart::content() as $item)

        <div class="bg-center bg-cover h-96 w-full object-center" style="background-image: url('{{ $item->options->image }}')">
 
        </div>
        
            <li class="flex p-2 border-b border-gray-200">
                
                <article class="flex-1">
                    <h1 class="font-bold my-2">{{ $item->name }}</h1>
                    <div class="flex">
                        <p class="font-bold">Cantidad: <span class="font-normal">{{ $item->qty }} 
                                @if ($item->qty == 1)
                                    unidad
                                @else
                                    unidades
                                @endif
                            </span> </p>
                        @isset($item->options['color'])
                            <p class="mx-2">- Color: {{ __($item->options['color']) }}</p>
                        @endisset
                        @isset($item->options['size'])
                            <p> Talla: - {{ $item->options['size'] }}</p>
                        @endisset
                    </div>

                    <p class="font-bold">Precio x unidad: <span class="font-normal">S/ {{ $item->price }}</span> </p>
                </article>
            </li>
        @empty
            <li class="py-6 px-4">
                <p class="text-center text-gray-700">
                    No tiene ningun producto agregado
                </p>
            </li>
        @endforelse
    </ul>
    @if (Cart::count())
        <div class="py-2 px-3">
            <p class="text-lg text-gray-700 mt-2 mb-3"><span class="font-bold">Total: </span> S/
                {{ Cart::subtotal() }} Nuevos soles</p>

            <x-button-enlace href="{{ route('shopping-cart') }}" color="orange" class="w-full">Procesar Reserva</x-button-enlace>
            <a class="text-sm cursor-pointer hover:underline mt-3 inline-block text-red-600 hover:text-red-800"
                wire:click="destroy">
                <i class="fas fa-trash"></i>
                Borrar la reserva
            </a>
        </div>
    @endif
</div>
