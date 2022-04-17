<?php

namespace App\Http\Livewire;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ModalCart extends Component
{
    protected $listeners = ['render'];

    public function destroy(){
        Cart::destroy();

        $this->emitTo('modal-cart','render');
    }

    public function render()
    {
        return view('livewire.modal-cart');
    }
}
