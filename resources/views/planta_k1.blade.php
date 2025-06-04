@extends('base')
@section('content')
    @include('snipets.navbar')
    @include('snipets.encabezado_plantas')
    @include('snipets.floor', ['whatsapp_url' => $whatsapp_url])
    @include('snipets.espacios')
    @include('snipets.equipment_plantas')
    @include('snipets.contacto')
    @include('snipets.schedules')
    @include('snipets.footer_plantas', [
        'link_proyecto' => '#caracteristicas-pisos',
        'link_ubicacion' => '#schedules',
        'link_departamentos' => '#equipment-plantas',
    ])
@endsection
@section('script')
    <script src="{{ asset('js/pisos/script.js') }}"></script>
    <script>
        mediumZoom('.zoomable');
    </script>
@endsection
