@component('mail::message')
# Estado de la reserva : Confirmado

<div align="center" style="margin: 1rem 0rem;">
    PROCESANDO ---- <b>RESERVADO</b>
</div>

Hola {{ $order->user()->first()->name }} te informamos que tu producto ya se encuentra listo. <br>
Te detallamos el resumen de tu compra.
@component('mail::panel')
Tu numero de pedido es: <b> RESERVA-000{{ $order->id }}</b> <br>
@foreach ($items as $item)
Producto: <b>{{ $item->name }}</b> <br>
@endforeach
Se enviara al siguiente punto:
<p>{{ $envio->department }} - {{ $envio->city }} - {{ $envio->district }}</p>
@endcomponent

@component('mail::table')
       
| Precio | Cantidad | Total |
| ------------- |:-------------:| --------:|
@foreach ($items as $item)
| S/{{ $item->price }} | {{ $item->qty }}  | S/ {{ $order->total }} |
@endforeach
       
@endcomponent

En caso tengas algún inconveniente con tu reserva puedes <br> escribirnos a: 
info@trepstom.com o enviarnos un mensaje a nuestro <br> wsp: +51 987 654 321 <br>
Gracias, <br>

{{ config('app.name') }}
@endcomponent
