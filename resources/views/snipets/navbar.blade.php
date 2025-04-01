<nav class="{{$nav_negro}} ">
    <a href="{{url('')}}" class="nav-logo {{$nav_negro_item}}">PROYECTO K</a>
    <input type="checkbox" id="check" style="display:none">
    <label for="check" class="icons">
        <i class="bx bx-menu" id="menu-icon"></i>
        <i class="bx bx-x" id="close-icon"></i>
    </label>
    <ul class="nav-list">
        <li><a href="{{$link_proyecto}}" class="{{$nav_list_item}}">PROYECTO</a></li>
        <li><a href="{{$link_ubicacion}}" class="{{$nav_list_item}}">UBICACIÓN</a></li>
        <li><a href="{{$link_departamentos}}" class="{{$nav_list_item}}">DEPARTAMENTOS</a></li>
    </ul>
    <a class="{{$nav_item}}" href="#contacto">CONTACTO</a>
</nav>