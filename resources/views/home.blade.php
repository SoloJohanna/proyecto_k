<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/home/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Azeret+Mono:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('js/home/script.js')}}"></script>
    <title>Proyecto K</title>
</head>
<body>
=======
@extends('base')
  @section('content')
>>>>>>> development
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