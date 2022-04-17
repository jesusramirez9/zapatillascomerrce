@component('mail::message')
# Estado de la reserva : <p style="color:#EE1E1E; ">Cancelado</p>

<div align="center" style="margin: 1rem 0rem;">
    <b> Cancelado </b> 
</div>

Hemos cancelado tu servicio. <br>
Te detallamos las posibles causas:
<ul>
    <li>- No se realizó el pago total de la reserva.</li>
    <li>- Incumplió con los términos y condiciones.</li>
    <li>- Faltó el respeto a algunos de nuestros colaboradores</li>
</ul>

       
@endcomponent

En caso tengas algún inconveniente con tu reserva puedes <br> escribirnos a: 
info@aleckatravel.pe o enviarnos un mensaje a nuestro <br> wsp: +51 987 654 321 <br>
Gracias, <br>

{{ config('app.name') }}

@endcomponent
