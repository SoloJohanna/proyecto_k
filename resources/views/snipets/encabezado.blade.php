<div class="encabezado">
    <div class="encabezado__container contenedor">
        <div class="encabezado__titulo">
            <p>DISEÑO INTELIGENTE, EFICIENCIA Y ARMONÍA CON EL ENTORNO</p>
        </div>
        <div class="encabezado__botones">
            <a href="" class="encabezado__boton__uno color-negro">Un nuevo <strong>estándar de vida </strong> en <img src="{{asset('img/alfiler.png')}}" alt="" width="16px">Quinta Junge</a>
            <div class="encabezado__boton__dos" id="encabezadoBotonDos">
                <a href="#beneficios" id="btn-saber-mas-encabezado">
                    <strong>¡OPORTUNIDAD DE COMPRA EN BLANCO!</strong> CONOCE MÁS SOBRE EL PROYECTO K               
                </a>
                <svg class="encabezado-flecha-abajo" width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="svgPathFlechaAbajo" d="M15.1111 8.28905L8.00003 15.4002M8.00003 15.4002L0.888916 8.28905M8.00003 15.4002V1.17795" stroke="white" stroke-width="1.33333"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="sliderr contenedor">
        <div class="fade-slider">
            <img src="{{asset('img/Edificio_K_Depto_Terraza_1.jpeg')}}" alt="Imagen 1">
            <img src="{{asset('img/Edificio_K_Depto_Terraza_2.jpeg')}}" alt="Imagen 2">
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.fade-slider img');
    let currentIndex = 0;

    const showNextImage = () => {
        images[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.add('active');
    };

    // Inicializa el slider
    images[currentIndex].classList.add('active');
    setInterval(showNextImage, 3000); // Cambia de imagen cada 3 segundos
});</script>
