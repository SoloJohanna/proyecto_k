<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/home/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Azeret+Mono:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{asset('js/pisos/script.js')}}"></script>
    <title>Proyecto K</title>
</head>
<body>
    <div class="container">
    @include('snipets.navbar', ['link_proyecto'=>'#caracteristicas-pisos', 'link_ubicacion'=>'#schedules', 'link_departamentos'=>'#equipment-plantas', 'fondo_negro'=>'fondo-negro', "texto_blanco"=>'texto-blanco', 'nav_list'=>'nav-list-negro'])
    @include('snipets.encabezado_plantas')
    @include('snipets.floor_k3')
    @include('snipets.espacios')
    @include('snipets.equipment_plantas')
    @include('snipets.contacto')
    @include('snipets.schedules')
    @include('snipets.footer', ['link_proyecto'=>'#caracteristicas-pisos', 'link_ubicacion'=>'#schedules', 'link_departamentos'=>'#equipment-plantas'])
    </div>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '998482552390703');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=998482552390703&ev=PageView&noscript=1"
/></noscript>
</body>
</html>