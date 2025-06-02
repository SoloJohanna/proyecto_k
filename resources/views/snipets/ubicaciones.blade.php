<div class="ubicaciones" id="location">
    <p class="ubicaciones-titulo">Más que un hogar, una experiencia de vida.</p>
    <div class="ubicaciones-bloques contenedor">
        <div class="carrusel-con-encabezado">
            <!-- Carrusel Splide -->
            <div id="carousel-ubicaciones" class="splide" aria-label="Galería de imágenes">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{ asset('img/country_club.png') }}" alt="Country Club">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/espacio_rio.png') }}" alt="Espacio Río">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/cafe_baque.png') }}" alt="Cafe Baque">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/sanatorio_aleman.png') }}" alt="Sanatorio Alemán">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/clinica_mujer.png') }}" alt="Clinica de la Mujer">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/jumbo.png') }}" alt="Supermercado Jumbo">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/copec.png') }}" alt="Servicentro Copec">
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contenido encima del carrusel -->
            {{-- <div class="encabezado__botones">
                    <div class="encabezado__boton__uno">
                        <p>Un nuevo <strong>estándar de vida</strong> en📍Quinta Junge</p>
                    </div>
                </div> --}}
            <div class="controles-personalizados-carousel">
                <button class="boton-flecha-carousel" id="btn-anterior-ubicaciones">{{ '←' }}</button>
                <p>|</p>
                <button class="boton-flecha-carousel" id="btn-siguiente-ubicaciones">{{ '→' }}</button>
            </div>
        </div>
        <div class="location-info-frame">
            <div class="location-info-text">
                <p><strong>Quinta Junge, sector de alta plusvalía y baja densidad.</strong><br>Ideal para quienes buscan
                    seguridad, conectividad y tranquilidad.</p>
                <br>
                <p>Su planificación estratégica lo ha consolidado como un entorno seguro,
                    moderno y con acceso a servicios de primer nivel.</p>
            </div>
            <div class="location-info-list">
                <p><strong>Walking distance</strong></p>
                @foreach ($location_items as $item)
                    <hr>
                    <div class="location-info-list-item">
                        <p class="location-info-list-item-text">{{ $item['name'] }}</p>
                        <div class="{{ $item['textClass'] }}">
                            <p>{{ $item['distance'] }}</p>
                            <svg width="4" height="5" viewBox="0 0 4 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.53552" cy="2.5116" r="1.53552" fill="#6F6F6F" />
                            </svg>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.70579 3.85159C7.01897 3.85159 7.32513 3.75871 7.58554 3.58472C7.84594 3.41072 8.0489 3.16341 8.16876 2.87406C8.28861 2.58471 8.31997 2.26632 8.25887 1.95915C8.19777 1.65198 8.04695 1.36983 7.82549 1.14837C7.60404 0.926912 7.32188 0.776098 7.01471 0.714998C6.70754 0.653898 6.38915 0.685256 6.0998 0.805108C5.81046 0.92496 5.56315 1.12792 5.38915 1.38833C5.21515 1.64874 5.12228 1.95489 5.12228 2.26808C5.12228 2.68805 5.28911 3.09082 5.58608 3.38779C5.88304 3.68475 6.28581 3.85159 6.70579 3.85159ZM6.70579 1.74024C6.81018 1.74024 6.91223 1.7712 6.99904 1.8292C7.08584 1.8872 7.15349 1.96964 7.19344 2.06608C7.23339 2.16253 7.24385 2.26866 7.22348 2.37105C7.20311 2.47344 7.15284 2.5675 7.07902 2.64131C7.0052 2.71513 6.91115 2.76541 6.80876 2.78577C6.70637 2.80614 6.60024 2.79569 6.50379 2.75574C6.40734 2.71578 6.32491 2.64813 6.26691 2.56133C6.20891 2.47453 6.17795 2.37247 6.17795 2.26808C6.17795 2.12809 6.23356 1.99383 6.33255 1.89484C6.43154 1.79585 6.56579 1.74024 6.70579 1.74024ZM9.69686 6.66671C9.69686 6.8067 9.64124 6.94096 9.54226 7.03995C9.44327 7.13894 9.30901 7.19455 9.16902 7.19455C7.54153 7.19455 6.7379 6.38212 6.08998 5.7298C6.01476 5.65415 5.94218 5.58025 5.87005 5.50987L5.49044 6.383L7.01369 7.46858C7.08189 7.51756 7.13741 7.5821 7.17566 7.65684C7.21391 7.73158 7.23378 7.81437 7.23362 7.89833V10.3616C7.23362 10.5016 7.17801 10.6358 7.07902 10.7348C6.98003 10.8338 6.84578 10.8894 6.70579 10.8894C6.56579 10.8894 6.43154 10.8338 6.33255 10.7348C6.23356 10.6358 6.17795 10.5016 6.17795 10.3616V8.16972L5.06202 7.37269L3.67073 10.5718C3.64435 10.6372 3.60514 10.6966 3.55541 10.7466C3.50567 10.7966 3.44643 10.8361 3.38118 10.8628C3.31592 10.8895 3.24598 10.9029 3.17548 10.9021C3.10497 10.9014 3.03533 10.8865 2.97068 10.8584C2.90602 10.8302 2.84765 10.7894 2.79902 10.7384C2.75039 10.6873 2.71249 10.627 2.68754 10.5611C2.66259 10.4952 2.65111 10.4249 2.65377 10.3544C2.65643 10.284 2.67318 10.2147 2.70303 10.1509L4.90499 5.08672C4.59298 5.10872 4.22642 5.23188 3.80533 5.45621C3.33362 5.71618 2.89336 6.02951 2.49322 6.39004C2.39114 6.48587 2.25517 6.53723 2.11523 6.53282C1.97528 6.52841 1.84282 6.46858 1.74699 6.3665C1.65115 6.26443 1.59979 6.12846 1.60421 5.98852C1.60862 5.84857 1.66844 5.71611 1.77052 5.62028C1.88532 5.51251 4.60148 2.99561 6.34906 4.5127C6.52236 4.66313 6.68511 4.82764 6.84258 4.98687C7.42848 5.57937 7.98139 6.13887 9.16902 6.13887C9.30901 6.13887 9.44327 6.19449 9.54226 6.29347C9.64124 6.39246 9.69686 6.52672 9.69686 6.66671Z"
                                    fill="#6F6F6F" />
                            </svg>
                            <p>{{ $item['walkTime'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const splide = new Splide('#carousel-ubicaciones', {
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
        document.getElementById('btn-anterior-ubicaciones').addEventListener('click', () => {
            splide.go('<'); // ir al slide anterior
        });

        document.getElementById('btn-siguiente-ubicaciones').addEventListener('click', () => {
            splide.go('>'); // ir al siguiente slide
        });
    });
</script>
