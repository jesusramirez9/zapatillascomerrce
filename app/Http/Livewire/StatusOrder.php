<?php

namespace App\Http\Livewire;

use App\Mail\OrderCanceled;
use App\Mail\OrderReserved;
use App\Mail\OrderThanks;
use App\Mail\ProcesandoMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class StatusOrder extends Component
{
    public $order, $status;
    public $rpta;
    public function mount(){
        $this->status = $this->order->status;
    }

    public function update(){
        $this->order->status = $this->status;
        $this->rpta = $this->order->status;
        $this->order->save();
        $this->emit('saved');

        if ($this->order->status == 3) {
            $correo = new OrderReserved($this->order);
            Mail::to( $this->order->user()->first()->email)->send($correo);
        }
        if ($this->order->status == 4) {
            $correo = new OrderThanks($this->order);
            Mail::to( $this->order->user()->first()->email)->send($correo);
        }
        
        if($this->order->status == 5)
        {
            $correo = new OrderCanceled($this->order);
            Mail::to( $this->order->user()->first()->email)->send($correo);
        }
       
    }

    public function render()
    {

        $items = json_decode($this->order->content); 
        $envio = json_decode($this->order->envio); 


        return view('livewire.status-order', compact('items', 'envio'));
    }
}
