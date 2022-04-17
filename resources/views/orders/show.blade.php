<x-app-layout>
    <div class="max-w-5xl  mx-auto px-4 sm:px-6 lg:px-8  md:pt-12 pb-12 py-12">

        <div class="bg-white rounded-lg shadow-lg px-6 md:px-12 py-8 mb-6 flex items-center">

            <div class="relative">
                <div
                    class="{{ $order->status >= 2 && $order->statud != 5 ? 'bg-green-700 ' : 'bg-gray-400 ' }} rounded-full h-12 w-12 flex items-center justify-center ">
                    <i class="fas fa-check text-white"></i>
                </div>
                <div class="absolute -left-1.5 mt-0.5">
                    <p class="text-sm">Recibido</p>
                </div>
            </div>

            <div
                class="{{ $order->status >= 3 && $order->statud != 5 ? 'bg-green-700 ' : 'bg-gray-400 ' }}h-1 flex-1 mx-2">
            </div>

            <div class="relative">
                <div
                    class="{{ $order->status >= 3 && $order->statud != 5 ? 'bg-green-700 ' : 'bg-gray-400 ' }} rounded-full h-12 w-12 flex items-center justify-center ">
                    <i class="fas fa-truck text-white"></i>
                </div>
                <div class="absolute -left-1 mt-0.5">
                    <p class="text-sm md:text-base">Enviando</p>
                </div>
            </div>

            <div
                class="{{ $order->status >= 4 && $order->statud != 5 ? 'bg-blue-400 ' : 'bg-gray-400 ' }} h-1 flex-1  mx-2">
            </div>

            <div class="relative">
                <div
                    class="{{ $order->status >= 4 && $order->statud != 5 ? 'bg-blue-400 ' : 'bg-gray-400 ' }} rounded-full h-12 w-12 flex items-center justify-center ">
                    <i class="fas fa-check text-white"></i>
                </div>
                <div class="absolute -left-1 mt-0.5">
                    <p class="text-sm md:text-base">Reservado</p>
                </div>
            </div>


            <div class="{{ $order->status == 5 ? 'bg-red-400 block' : 'bg-gray-400 hidden' }} h-1 flex-1  mx-2">
            </div>
            <div class="relative">
                <div
                    class="{{ $order->status == 5 ? 'bg-red-400 block' : 'bg-gray-400 hidden' }} rounded-full h-12 w-12 flex items-center justify-center ">
                    <i class="fas fa-window-close text-white "></i>
                </div>
                <div class="{{ $order->status == 5 ? ' block' : 'hidden' }} absolute -left-1 mt-0.5">
                    <p class="text-sm md:text-base">Anulado</p>
                </div>
            </div>



        </div>

        <div class="bg-blue-50 rounded-lg shadow-lg px-6 py-4 mb-6 items-center">


            <p>
                <span class="text-gray-600 font-bold">Estado: </span>
                Recibido
            </p>
            <p>En este estado el producto ya se encuentra registrado en nuestras instalaciones.</p>
            <p>
                <span class="text-gray-600 font-bold">Estado: </span>
                Procesando
            </p>
            <p>En este estado el producto ya se encuentra para recogo o envío.</p>

            <p>
                <span class="text-gray-600 font-bold">Estado: </span>
                Entregado
            </p>
            <p>Muchas gracias por tu compra</p>




        </div>

        <div class="bg-white rounded-lg shadow-lg px-6 py-4 mb-6 flex items-center">
            <p class="colorbroywm font-bold uppercase"> <span class=" font-bold">Número de compra:</span>
                Compra-000{{ $order->id }}</p>
            @if ($order->status == 1)
                <x-button-enlace class=" bg-red-400 ml-auto cursor-pointer"
                    href="{{ route('orders.payment', $order) }}">Ir a pagar</x-button-enlace>
            @endif
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                <div>
                    <p class="text-lg  font-bold uppercase">Envío</p>
                    @if ($order->envio_type == 1)
                        <p class="text-sm colorbroywm font-semibold">El producto será recogido en:</p>
                        <p class="text-sm colorbroywm ">Calle falsa 123</p>
                    @else
                        <p class="text-sm colorbroywm font-semibold">El producto será enviado a:</p>
                     
                        <p class="colorbroywm ">{{ $envio->department }} - {{ $envio->city }} -
                            {{ $envio->district }}</p>
                         <p class="text-sm colorbroywm font-semibold">Referencia del lugar:</p>
                        <p class="text-sm colorbroywm ">{{ $envio->references }}</p> 
                    @endif
                </div>

                <div>
                    <p class="text-lg  font-bold uppercase">CONTACTO PRINCIPAL</p>
                    <p class="text-sm  font-semibold">Persona quien recibirá el producto: </p>
                    <p class="colorbroywm">{{ $order->contact }}</p>
                    <p class="text-sm  font-semibold">Celular de contacto:</p>
                    <p class="colorbroywm"> {{ $order->phone }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 mb-6 text-gray-700">
            <p class="text-xl mb-4  font-bold">Resumen</p>

            <table class="table-auto w-full">
                <thead>
                    <tr class=" font-bold">
                        <th></th>
                        <th class="text-xs sm:text-base">Precio</th>
                        <th class="text-xs sm:text-base">Cantidad</th>
                        <th class="text-xs sm:text-base">total</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">

                    @foreach ($items as $item)
                        <tr>
                            <td>
                                <div class="flex ">

                                    <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}"
                                        alt="">



                                    <article>
                                        <h1 class="font-bold txttitel_resumen">{{ $item->name }}</h1>
                                        <div class="flex text-xs txttitel_resumen">
                                            @isset($item->options->color)
                                                Color: {{ __($item->options->color) }}
                                            @endisset

                                            @isset($item->options->size)
                                                - Talla: {{ $item->options->size }}
                                            @endisset
                                        </div>
                                    </article>
                                </div>
                            </td>
                            <td class="text-center colorbroywm font-bold text-xs sm:text-base">
                                S/{{ $item->price }}
                            </td>
                            <td class="text-center colorbroywm font-bold text-xs sm:text-base">
                                {{ $item->qty }} 
                            </td>
                            <td class="text-center colorbroywm font-bold text-xs sm:text-base">
                                S/ {{ $item->price * $item->qty }}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </div>
</x-app-layout>
