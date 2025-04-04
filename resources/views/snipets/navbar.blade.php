<nav class="{{$fondo_negro}}">
    <a href="{{url('')}}" class="nav-logo {{$texto_blanco}}">PROYECTO K</a>
    <input type="checkbox" id="check" style="display:none">
    <label for="check" class="icons">
        <i class="bx bx-menu {{$texto_blanco}}" id="menu-icon"></i>
        <i class="bx bx-x {{$texto_blanco}}" id="close-icon" ></i>
    </label>
    <ul class="{{$nav_list}}" id="nav-list">
        <li class="nav-list-li"><a href="{{$link_proyecto}}" class="nav-list-item {{$texto_blanco}}">PROYECTO</a></li>
        <li class="nav-list-li"><a href="{{$link_ubicacion}}" class="nav-list-item {{$texto_blanco}}">UBICACIÓN</a></li>
        <li class="nav-list-li"><a href="{{$link_departamentos}}" class="nav-list-item {{$texto_blanco}}">DEPARTAMENTOS</a></li>
        <li class="nav-list-li" id="nav-list-item-contacto"><a href="#contacto" class="nav-list-item {{$texto_blanco}}">CONTACTO</a></li>
    </ul>
    <a class="nav-item {{$texto_blanco}}" href="#contacto">CONTACTO</a>
</nav>