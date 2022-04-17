<footer class="border-2 border-gray-400 border-opacity-20 border-t-2 mt-14 pt-6">

    <div class="max-w-8xl mx-auto px-2  grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-6 md:gap-16 items-center">
        <div>
            <div class="mb-6 flex justify-center md:justify-start md:block">
                <x-jet-application-mark class="block h-10 md:h-16 w-auto" />
            </div>
            <div class="flex  mb-6 justify-center md:justify-start md:block">
                <div>
                    <p class="font-bold">SÍGUENOS EN</p>
                </div>
                <div class="mx-4">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="">
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
            <div class="grid grid-cols-3 lg:grid-cols-4  gap-3 mx-6 md:mx-0">
                <div>
                    <img src="{{ asset('img/iconos/mastercard.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/iconos/exprexx.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/iconos/visa.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/iconos/pagoefectivo.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/iconos/mercadopago.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/iconos/paypal.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/iconos/scotiabank.png') }}" alt="">
                </div>

            </div>
        </div>
        <div>
            <p class="text-base font-bold mb-3 text-center md:text-left">CONTACTO</p>
            <div class="flex justify-center md:block">
                <ul class="text-sm ulli ulcontact">
                    <li><i class="fas fa-map-marker-alt mr-2"></i>Av. Canada 3770 - San Luis</li>
                    <li><i class="fas fa-phone color-icon-footer mr-2"></i> (01) 436 6643</li>
                    <li><i class="fas fa-mobile-alt color-icon-footer mr-2"></i> 989 056 593 </li>
                    <li><i class="fab fa-whatsapp color-icon-footer mr-2"></i>914 673 518</li>
                    <li><i class="far fa-envelope color-icon-footer mr-2"></i>ventas@alecka.pe</li>
                </ul>
            </div>
        </div>
        <div>
            <p class="text-base font-bold mb-3 text-center md:text-left">POLITICAS</p>
            <div class="flex justify-center md:block">
                <ul class="text-sm ulli ulcontact">
                    <li><a href="{{ route('politicas') }}">Políticas de privacidad</a> </li>
                    <li><a href="{{ route('terminos') }}"> Términos y condiciones</a></li>
                    <li>Preguntas Frecuentes</li>
                    <li>Libro de reclamaciones</li>
                </ul>
            </div>
        </div>
        <div>
            <p class="text-base font-bold mb-3 text-center md:text-left">INFORME</p>
            <div class="flex justify-center md:block">
                <ul class="text-sm ulli ulcontact">
                    <li>Factura electrónica</li>
                    <li>Términos y condiciones</li>
                    <li>Proveedor B to B</li>
                    <li>Proveedor B to C</li>
                </ul>
            </div>
        </div>
        <div>
            <p class="text-base font-bold mb-3 text-center md:text-left">VENTA CORPORATIVA</p>
            <div class="flex justify-center md:block">
                <ul class="text-sm ulli ulcontact">
                    <li><i class="fas fa-phone color-icon-footer mr-2"></i> (01) 436 6643</li>
                    <li><i class="fas fa-mobile-alt color-icon-footer mr-2"></i> 989 056 593 </li>
                    <li><i class="far fa-envelope color-icon-footer mr-2"></i>ventas@alecka.pe</li>
                    <li><i class="fas fa-map-marker-alt mr-2"></i>Av. Canada 3770 - San Luis</li>

                </ul>
            </div>
        </div>
    </div>

    <div class="bg-gray-700  text-white py-2 mt-8">
        <div class="flex justify-center">
            <p>Copyright © 2022 | <span class="font-serif font-semibold"> Consultora Trepstom </span></p>
        </div>
    </div>

</footer>
