<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Resumen de su reserva</title>
</head>
<style>



</style>

<body>

    <div>
        <div style='width:800px; margin: auto;'>
            <div
                style='color:#fff;text-align:center;background:#044767;padding-top:15px;padding-bottom:15px;display:flex;justify-content: space-between;align-items:center; padding: 1rem 3rem;'>
                <div>
                    <h2 style='font-family:sans-serif'>Alecka Travel Tours - Pendiente</h2>
                </div>
                <div>
                    <h5 style='font-family:sans-serif; font-weight: 800;'>Tour</h5>
                </div>
            </div>
            <div style="font-family:sans-serif;text-align: center; margin-top:2rem; margin-bottom:2rem">
                <h3 style="font-weight: 500;">Bienvenido: {{ auth()->user()->name }}</h3>
                <h1 style="font-weight: 800;">Gracias por tu reserva!</h1>
            </div>
            <div style="margin: auto;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet illo quaerat facere consectetur saepe
                    nesciunt nobis, voluptatum dolor? Odit sequi ipsum corporis a, non voluptatem. Eos velit culpa
                    doloremque mollitia?</p>
            </div>

            <div style='width:750px;margin: auto; background-color: #f0f7fb '>

                <div style="display:flex;justify-content: space-between;align-items:center; padding: 1rem 3rem;">
                    <div>
                        <h5 style="font-weight: 800;">Numero de reserva#:</h5>
                    </div>
                    <div>
                        <h5 style="font-weight: 800;">RESERVA-{{ $order->id }}</h5>
                    </div>
                </div>


            </div>
            @foreach ($items as $item)
                <div style='width:750px;margin: 1rem 4rem 0rem 4rem'>

                    <div style="display:flex;justify-content: space-between;align-items:center; padding: 0rem 3rem;">
                        <div>
                            <h5 style="font-weight: 400;">Precio por persona:</h5>
                        </div>
                        <div>
                            <h5 style="font-weight: 400;">S/{{ $item->price }} Nuevos soles</h5>
                        </div>
                    </div>
                    <div style="display:flex;justify-content: space-between;align-items:center; padding: 0rem 3rem;">
                        <div>
                            <h5 style="font-weight: 400;">Cantidad de personas:</h5>
                        </div>
                        <div>
                            <h5 style="font-weight: 400;">{{ $item->qty }} persona(s)</h5>
                        </div>
                    </div>
                    <hr style='background-color: #044767; padding-top:0.1rem;'>
                </div>
            @endforeach
            <div style='width:750px; margin:0rem 4rem 0rem 4rem;'>
                <div style="display:flex;justify-content: space-between;align-items:center; padding: 0rem 3rem;">
                    <div>
                        <h5 style="font-weight: 800;">TOTAL:</h5>
                    </div>
                    <div>
                        <h5 style="font-weight: 800;">S/ {{ $order->total }} Nuevos soles</h5>
                    </div>
                </div>
            </div>
            <div style='width:750px; margin:1rem 4rem 0rem 4rem;'>
                <div style="display:flex;justify-content: space-between;align-items:center; padding: 0.5rem 3rem;">
                    <div>
                        <h5 style="font-weight: 800;">Dirección de Recogo:</h5>
                        <p>{{ $envio->department }} - {{ $envio->city }} -
                            {{ $envio->district }}</p>
                    </div>
                    <div>
                        <h5 style="font-weight: 800;">Gracias por tu preferencia</h5>
                    </div>
                </div>
            </div>

            <div style='color:#fff;text-align:center;background:#044767;padding-top:15px;padding-bottom:15px;'>
                <h4 style='font-family:sans-serif'>© {{ date('Y') }} Alecka Travel Tours. Todos los derechos
                    reservados.</h4>
                <img src="{{ asset('img/logo/lecka.png') }}" style="width: 2.5rem; height:2.5rem;">

            </div>
        </div>
    </div>


</body>

</html>
