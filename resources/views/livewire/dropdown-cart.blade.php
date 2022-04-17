<div>
    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer">
                <x-cart color="white" size="30" />

                @if (Cart::count())
                    <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ Cart::count() }}</span>
                @else
                <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span></span>    
                @endif

                
                
            </span>
        </x-slot>

        <x-slot name="content">
            <ul class="text-gray-500">
                @forelse (Cart::content() as $item)
                    <li class="flex p-2 border-b border-gray-200">
                        <img class="h-15 w-20 object-cover mr-4" src="{{$item->options->image}}" alt="">
                        <article class="flex-1">
                            <h1 class="font-bold">{{$item->name}}</h1>
                            <div class="flex">
                                <p>Cant: {{$item->qty}} <span>@if ($item->qty==1)
                                    persona
                                @else
                                    personas
                                @endif</span> </p>
                                @isset($item->options['color'])
                                    <p class="mx-2">- Color:  {{ __($item->options['color']) }}</p>
                                @endisset
                                @isset($item->options['size'])
                                    <p> - {{ ($item->options['size']) }}</p>
                                @endisset
                            </div>
                            
                            <p>S/ {{$item->price}}</p>
                        </article>
                    </li>
                @empty
                    <li class="py-6 px-4">
                        <p class="text-center text-gray-700">
                            No tiene agregado ninguna reserva
                        </p>
                    </li>
                @endforelse
            </ul>
            @if (Cart::count())
                <div class="py-2 px-3">
                    <p class="text-lg text-gray-700 mt-2 mb-3"><span class="font-bold">Total: </span> S/ {{ Cart::subtotal() }}  Nuevos soles</p>
                  
                    <x-button-enlace href="{{route('shopping-cart')}}" color="orange" class="w-full">Ir a la Reserva</x-button-enlace>
                    <a class="text-sm cursor-pointer hover:underline mt-3 inline-block text-red-600 hover:text-red-800" wire:click="destroy">
                        <i class="fas fa-trash"></i>
                        Borrar la reserva
                    </a>
                </div>
            @endif

        </x-slot>
    </x-jet-dropdown>
</div>
