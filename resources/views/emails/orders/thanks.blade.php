@component('mail::message')
# Gracias por confiar en nosotros

<div align="center" style="margin: 1rem 0rem;">
    <b> TOUR COMPLETADO </b> 
</div>

Muchas Gracias {{ $order->user()->first()->name }}!. <br>
Hemos completado el tour satisfactoriamente. <br>

En caso tengas algún sugerencia con respecto a nuestros servicios puedes <br> escribirnos a: 
sugerencias@trepstom.com o enviarnos un mensaje a nuestro <br> wsp: +51 987 654 321 <br>
Gracias, <br>

{{ config('app.name') }}
@endcomponent
