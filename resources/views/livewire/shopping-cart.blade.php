<div class="container mt-14 py-8">

    <x-table-responsive>
        <div class="px-6 pb-4  lg:py-4 text-center  md:mt-0 bg-white">
            <h1 class="text-2xl lg:text-4xl font-bold ">Compra de producto</h1>
        </div>

        @if (Cart::count())
            <table class="min-w-full brdever_tble divide-y divide-green-900">
                <thead class="bg-gray-50 brdever_tble">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-bold  uppercase tracking-wider">
                            Producto
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-bold  uppercase tracking-wider">
                            Precio
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-bold  uppercase tracking-wider">
                            Cantidad
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-bold  uppercase tracking-wider">
                            Subtotal
                        </th>

                    </tr>
                </thead>
                <tbody class="bg-white ">
                    @foreach (Cart::content() as $item)
                        <tr class="border-b-2 border-gray-500 border-opacity-20">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full object-cover object-center"
                                            src="{{ $item->options->image }}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm  colorbroywm font-bold">
                                            {{ $item->name }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            @if ($item->options->color)
                                                <span class="capitalize">
                                                    - Color: {{ __($item->options->color) }}
                                                </span>
                                            @endif
                                            @if ($item->options->size)
                                                <span class="mx-1"> - </span>
                                                <span>Talla: {{ $item->options->size }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                               
                                <div class="text-sm colorbroywm font-bold"><span>S/ {{ $item->price }}</span>
                                    <a class="ml-6 cursor-pointer hover:text-red-600" wire:click="delete('{{$item->rowId}}')" wire:loading.class="text-red-600 opacity-600" wire:target="delete('{{$item->rowId}}')">
                                        <i class="fas fa-trash"></i>
                                    </a></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm colorbroywm font-bold">
                                    @if ($item->options->size)
                                    @livewire('update-cart-size', ['rowId' => $item->rowId], key($item->rowId))
                                @elseif($item->options->color)
                                    @livewire('update-cart-color', ['rowId' => $item->rowId], key($item->rowId))
                                @else
                                    @livewire('update-cart-item', ['rowId' => $item->rowId], key($item->rowId))
                                @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm colorbroywm font-bold">
                                <div class="text-sm  colorbroywm font-bold">
                                    S/ {{ $item->price * $item->qty }}
                                </div>
                               
                            </td>

                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
            <div class="px-6 py-4">
                <a class="text-sm cursor-pointer hover:underline mt-3 inline-block" wire:click="destroy">
                    <i class="fas fa-trash"></i>
                    Borrar todo
                </a>
            </div>
        @else
            <div class="flex flex-col items-center mt-2 md:mt-0 py-4">
                <x-cart></x-cart>
                <p class="text-sm lg:text-lg text-gray-700 mt-4">No tienes alguna reservación</p>
                <x-button-enlace href="http://127.0.0.1:8000/categories/tours" class="mt-4 bg-blue-700 px-16">
                    Nuestros tours
                </x-button-enlace>
            </div>

        @endif
    </x-table-responsive>
    <!-- This example requires Tailwind CSS v2.0+ -->


    @if (Cart::count())

        <div class="bg-white rounded-lg shadow-lg px-6 py-4 mt-4">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-700">
                        <span class="font-bold text-lg">Total:</span>
                        S/ {{ Cart::subTotal() }}
                    </p>
                </div>
                <div>
                    <x-button-enlace href="{{ route('orders.create') }}" class="bg-orange-500">
                        Continuar
                    </x-button-enlace>
                </div>
            </div>

        </div>

    @endif

</div>
