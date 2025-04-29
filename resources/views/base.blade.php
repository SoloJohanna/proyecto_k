<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Azeret+Mono:ital,wght@0,100..900;1,100..900&display=swap">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="{{asset('css/home/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/encabezado.css')}}">
    <link rel="stylesheet" href="{{asset('css/caracteristicas.css')}}">
    <link rel="stylesheet" href="{{asset('css/equipamiento.css')}}">
    <link rel="stylesheet" href="{{asset('css/beneficios.css')}}">
    <link rel="stylesheet" href="{{asset('css/ubicacion.css')}}">
    <link rel="stylesheet" href="{{asset('css/departamentos.css')}}">
    <link rel="stylesheet" href="{{asset('css/contacto.css')}}">
    <link rel="stylesheet" href="{{asset('css/schedules.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/caracteristicas_pisos.css')}}">
    <title>Proyecto K</title>
</head>
<body>
    @yield('content')
    
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
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R9VZLWC882"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-R9VZLWC882');
    </script>
    <!--Nuesto Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('js/slider.js')}}"></script>
    @yield('script')
</body>
</html>