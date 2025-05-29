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
            pagination: false, // opcional: oculta los puntitos
            arrows: false, // importante: desactiva las flechas por defecto
            type: 'loop', // permite que se repita al llegar al final
            autoplay: true, // activa el autoplay
            interval: 4000, // tiempo entre cambios (milisegundos)
            heightRatio: 0.5,
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
