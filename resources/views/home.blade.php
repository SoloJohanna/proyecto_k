@extends('base')
@section('content')
    @include('snipets.navbar')
    @include('snipets.encabezado')
    @include('snipets.caracteristicas')
    @include('snipets.equipamiento')
    @include('snipets.beneficios')
    @include('snipets.ubicaciones', ['location_items' => $location_items])
    @include('snipets.department')
    @include('snipets.contacto')
    @include('snipets.schedules')
    @include('snipets.footer', [
        'link_proyecto' => '#caracteristicas',
        'link_ubicacion' => '#schedules',
        'link_departamentos' => '#departments',
    ])
@endsection
@section('script')
    <script src="{{ asset('js/home/script.js') }}"></script>
@endsection
