@extends('base')
  @section('content')
    @include('snipets.navbar', ['link_proyecto'=>'#caracteristicas', 'link_ubicacion'=>'#location', 'link_departamentos'=>'#departments', 'fondo_negro'=>'none', "texto_blanco"=>'none', 'nav_list'=>'nav-list'])
    @include('snipets.encabezado')
    @include('snipets.caracteristicas')
    @include('snipets.equipamiento')
    @include('snipets.beneficios')
    @include('snipets.ubicaciones')
    @include('snipets.department')
    @include('snipets.contacto')
    @include('snipets.schedules')
    @include('snipets.footer', ['link_proyecto'=>'#caracteristicas', 'link_ubicacion'=>'#location', 'link_departamentos'=>'#departments'])
  @endsection
  @section('script')
  <script src="{{asset('js/home/script.js')}}"></script>
  @endsection