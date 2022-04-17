<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResumenMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Resumen de reserva";
    public $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        //
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $items = json_decode($this->order->content);
        $envio = json_decode($this->order->envio);

        return $this->from('no-reply@trepstom.com', 'Resumen de la reserva')
                    ->view('emails.resumen', compact('items', 'envio'));

    }
}
