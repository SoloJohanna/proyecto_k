<section class="carrusel-con-encabezado">
    <!-- Carrusel Splide -->
    <div id="depto-carousel" class="splide" aria-label="Galería de imágenes">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="{{ asset('img/Edificio_K_Depto_Terraza.jpeg') }}" alt="Terraza">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/Edificio_K_Salon_Multiuso.jpeg') }}" alt="Salon Multiuso">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/Edificio_K_Depto_Cocina_1.jpeg') }}" alt="Cocina">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/Edificio_K_Depto_Terraza_1.jpeg') }}" alt="Vista aerea">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/Edificio_K_Depto_Terraza_2.jpeg') }}" alt="Vista aerea 2">
                </li>
            </ul>
        </div>
    </div>

    <!-- Contenido encima del carrusel -->
    <div class="encabezado__container contenedor">
        <div class="encabezado__titulo">
            <p>DISEÑO INTELIGENTE, EFICIENCIA Y ARMONÍA CON EL ENTORNO</p>
        </div>
        <div class="encabezado__botones">
            <div class="encabezado__boton__uno">
                <p>Un nuevo <strong>estándar de vida</strong> en📍Quinta Junge</p>
            </div>
            <div class="encabezado__boton__dos" id="encabezadoBotonDos">
                <a href="#beneficios" id="btn-saber-mas-encabezado">
                    <strong>¡OPORTUNIDAD DE COMPRA EN BLANCO!</strong> CONOCE MÁS SOBRE EL PROYECTO K
                </a>
                <svg class="encabezado-flecha-abajo" width="16" height="18" viewBox="0 0 16 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path id="svgPathFlechaAbajo"
                        d="M15.1111 8.28905L8.00003 15.4002M8.00003 15.4002L0.888916 8.28905M8.00003 15.4002V1.17795"
                        stroke="white" stroke-width="1.33333" />
                </svg>
            </div>
        </div>
        <div class="controles-personalizados-carousel">
            <button class="boton-flecha-carousel" id="btn-anterior-encabezado">{{ '←' }}</button>
            <p>|</p>
            <button class="boton-flecha-carousel" id="btn-siguiente-encabezado">{{ '→' }}</button>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const splide = new Splide('#depto-carousel', {
            arrows: false, // importante: desactiva las flechas por defecto
            type: 'loop', // permite que se repita al llegar al final
            autoplay: true, // activa el autoplay
            interval: 4000, // tiempo entre cambios (milisegundos)
            breakpoints: {
                768: {
                    pagination: true, // habilita paginación solo en pantallas pequeñas
                },
            }
        })

        splide.mount();

        // Botones personalizados
        document.getElementById('btn-anterior-encabezado').addEventListener('click', () => {
            splide.go('<'); // ir al slide anterior
        });

        document.getElementById('btn-siguiente-encabezado').addEventListener('click', () => {
            splide.go('>'); // ir al siguiente slide
        });
    });
</script>
