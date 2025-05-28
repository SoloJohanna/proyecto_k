<section class="carrusel-con-encabezado">
    <!-- Carrusel Splide -->
    <div id="image-carousel" class="splide" aria-label="Beautiful Images">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="{{ asset('img/Edificio_K_Depto_Terraza_1.jpeg') }}" alt="Imagen 1">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/Edificio_K_Depto_Terraza_2.jpeg') }}" alt="Imagen 2">
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
        <div class="controles-personalizados">
            <button class="boton-flecha" id="btn-anterior">{{ '←' }}</button>
            <p>|</p>
            <button class="boton-flecha" id="btn-siguiente">{{ '→' }}</button>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const splide = new Splide('.splide', {
            pagination: false, // opcional: oculta los puntitos
            arrows: false, // importante: desactiva las flechas por defecto
            type: 'loop', // permite que se repita al llegar al final
            autoplay: true, // activa el autoplay
            interval: 4000, // tiempo entre cambios (milisegundos)
        })

        splide.mount();

        // Botones personalizados
        document.getElementById('btn-anterior').addEventListener('click', () => {
            splide.go('<'); // ir al slide anterior
        });

        document.getElementById('btn-siguiente').addEventListener('click', () => {
            splide.go('>'); // ir al siguiente slide
        });
    });
</script>
