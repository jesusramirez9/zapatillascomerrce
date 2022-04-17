<div x-data>
    <p class="text-gray-700 mb-4 mt-4 mx-6 md:mx-0"> <span class="text-lg font-semibold">Asientos disponibles:
        </span>{{ $quantity }}</p>
    <div class="flex items-center ml-6 md:ml-0">
        @if ($qty == 1)
            <p class="mr-4">{{ $qty }} Persona: </p>
        @else
            <p class="mr-4">{{ $qty }} Personas: </p>
        @endif
        <div class="mr-4 bordradiu">

            <button class="btn_menmas hover:bg-gray-300 rounded-lg px-4 py-1 bg-gray-100" disabled
                x-bind:disabled="$wire.qty <= 1" wire:loading.attr="disabled" wire:target="decrement"
                wire:click="decrement">
                -
            </button>
            <span class="mx-2 text-gray-700 qtydad">{{ $qty }}</span>
            <button class="btn_menmas hover:bg-gray-300 rounded-lg px-4 py-1 bg-gray-100"
                x-bind:disabled="$wire.qty >= $wire.quantity" wire:loading.attr="disabled" wire:target="increment"
                wire:click="increment">
                +
            </button>
        </div>
        <div class="flex-1">
            <div class="itemcolbtnweb">
                <button
                    class="text-white add_prod font-medium text-sm bg_pricipal px-5 py-2 rounded-xl hover:bg-blue-700"
                    x-bind:disabled="$wire.qty > $wire.quantity" wire:click="addItem" wire:loading.attr="disabled"
                    wire:target="addItem">Reservar Tour</button>

                {{-- <x-button color="orange" x-bind:disabled="$wire.qty > $wire.quantity" class="w-full"
                    wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem">
                    Agregar a la bolsa
                </x-button> --}}
            </div>
            <div class="itemcolorbtn">
                <x-button color="orange" x-bind:disabled="$wire.qty > $wire.quantity" class="w-full"
                    wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem">
                    Reservar Tour
                </x-button>
            </div>

        </div>
    </div>
    <div class="mt-8 mx-6 md:mx-0">
        <p class="uppercase text-gray-400 font-normal">CODIGO DEL TOUR: {{ $product->code }}</p>
        {{-- <p class=" text-gray-400 font-normal">Categoría: <span class="uppercase"> {{$product->subcategory->name}}</span> </p> --}}

    </div>

    <x-jet-dialog-modal wire:model="open_edit">
        <div class="modalPublicidad">
            <x-slot name="title">
            </x-slot>
            <x-slot name="content">
                <div class="slide_rlg">
                    @livewire('modal-cart')
                </div>

            </x-slot>
            <x-slot name="footer">
                <x-jet-button wire:click="$set('open_edit', false)" class="mr-4">
                    Continuar viendo
                </x-jet-button>
            </x-slot>
        </div>
    </x-jet-dialog-modal>
</div>
