<nav class="navbar fondo__negro" id="nav">
    <a href="{{url('')}}" class="nav__logo__negro ">PROYECTO K</a>
    <div class="navbar__container__negro contenedor" id="nav">
        <ul class="nav__links fondo__negro" id="nav-list">
            <div class="nav__sections">
                <li class="nav__list__blanco">
                    <a href="{{url('/#caracteristicas')}}" class="nav__link__negro ">PROYECTO</a>
                </li>
                <li class="nav__list__blanco">
                    <a href="{{url('/#location')}}" class="nav__link__negro">UBICACIÓN</a>
                </li>
                <li class="nav__list__blanco">
                    <a href="{{url('/#departments')}}" class="nav__link__negro">DEPARTAMENTOS</a>
                </li>
            </div>
            <li class="nav__list__blanco nav__list__contacto">
                <a href="{{url('/#contacto')}}" class="nav__link__negro nav__link__contacto">CONTACTO</a>
            </li>
            <div class="nav__list__blanco nav__list__sociales">
                <p>PROYECTO K  |</p>
                <img src="{{asset('img/insta__nav.png')}}" alt="">
            </div>
        </ul>
    </div>
    <!-- definimos los botones de accion para el menu responsive -->
    <a href="#" class="nav__close">
        <img src="{{asset('img/close__white__icon.svg')}}" width="50px" alt="" class="nav__img menu_blanco">
    </a>
    <a href="#nav" class="nav__hamburger">
        <img src="{{asset('img/hamburger__white__icon.svg')}}" width="50px" alt="" class="nav__img menu_blanco">
    </a>
</nav>