<nav class="navbar" id="nav">
    <a href="{{ url('') }}" class="nav__logo__main {{ $texto_blanco }}">PROYECTO K</a>
    <div class="navbar__container contenedor" id="nav">
        <ul class="nav__links" id="nav-list">
            <a href="{{ url('') }}" class="nav__logo {{ $texto_blanco }}">PROYECTO K</a>
            <div class="nav__sections">
                <li class="nav__list">
                    <a href="{{ $link_proyecto }}" class="nav__link">PROYECTO</a>
                </li>
                <li class="nav__list">
                    <a href="{{ $link_ubicacion }}" class="nav__link">UBICACIÓN</a>
                </li>
                <li class="nav__list">
                    <a href="#" class="nav__link">ENTORNO</a>
                </li>
                <li class="nav__list">
                    <a href="{{ $link_departamentos }}" class="nav__link">DEPARTAMENTOS</a>
                </li>
            </div>
            <li class="nav__list nav__list__contacto">
                <a href="#contacto" class="nav__link nav__link__contacto">CONTACTO</a>
            </li>
            <div class="nav__list nav__list__sociales">
                <a href="https://www.instagram.com/proyectok.cl/">PROYECTO K | <i
                        class="fa-brands fa-instagram"></i></a>
            </div>
        </ul>
    </div>
    <!-- definimos los botones de accion para el menu responsive -->
    <a href="#" class="nav__close">
        <img src="{{ asset('img/close__white__icon.svg') }}" width="50px" alt="" class="nav__img">
    </a>
    <a href="#nav" class="nav__hamburger">
        <img src="{{ asset('img/hamburger__white__icon.svg') }}" width="50px" alt="" class="nav__img">
    </a>
</nav>
