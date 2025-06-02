<!-- NAVBAR SIMPLIFICADO -->
<nav class="navbar">
    <a href="{{ url('') }}" class="nav__logo">PROYECTO K</a>

    <!-- NAVEGACIÓN DESKTOP -->
    <div class="nav__desktop">
        <ul class="nav__menu">
            <li><a href="{{ url('/#caracteristicas') }}" class="nav__link">PROYECTO</a></li>
            <li><a href="{{ url('/#location') }}" class="nav__link">UBICACIÓN</a></li>
            <li><a href="{{ url('/#schedules') }}" class="nav__link">ENTORNO</a></li>
            <li><a href="{{ url('/#departments') }}" class="nav__link">DEPARTAMENTOS</a></li>
        </ul>
    </div>

    <!-- CONTACTO SEPARADO -->
    <a href="#contacto" class="nav__contacto">CONTACTO</a>

    <!-- HAMBURGER MENU -->
    <div class="nav__hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>

<!-- MENU MÓVIL -->
<div class="nav__mobile" id="mobileMenu">
    <ul class="nav__mobile__menu">
        <li class="nav__mobile__item">
            <a href="#caracteristicas" class="nav__mobile__link" onclick="closeMenu()">PROYECTO</a>
        </li>
        <li class="nav__mobile__item">
            <a href="#location" class="nav__mobile__link" onclick="closeMenu()">UBICACIÓN</a>
        </li>
        <li class="nav__mobile__item">
            <a href="#schedules" class="nav__mobile__link" onclick="closeMenu()">ENTORNO</a>
        </li>
        <li class="nav__mobile__item">
            <a href="#departments" class="nav__mobile__link" onclick="closeMenu()">DEPARTAMENTOS</a>
        </li>
        <li class="nav__mobile__item">
            <a href="#contacto" class="nav__mobile__link" onclick="closeMenu()">CONTACTO</a>
        </li>
    </ul>

    <!-- REDES SOCIALES -->
    <div class="nav__mobile__sociales">
        <a href="https://www.instagram.com/proyectok.cl/">
            PROYECTO K | <i class="fa-brands fa-instagram"></i>
        </a>
    </div>
</div>
