<div class="espacios">                              
    <div class="espacios__frame contenedor">
        <p class="espacios-title">Explora los espacios que te esperan</p>
        <div class="slider__espacios">
            <div class="fade__slider__espacios" id="slider__espacios">
                <img class="" src="{{asset('img/salon_multihusos.jpeg')}}" alt="">
                <img class="" src="{{asset('img/Edificio_K_Depto_Gimnasio.jpeg')}}" alt="">
                <img class="" src="{{asset('img/Edificio_K_Depto_Terraza_2.jpeg')}}" alt="">
            </div>
            <div class="slider__btn slider__btn__left" id="slider__btn__left__espacios">&lt;</div>
            <div class="slider__btn slider__btn__right" id="slider__btn__right__espacios">&gt;</div>
        </div>
    </div>
</div>
<script>

document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.fade__slider__espacios img');
    const btnLeft = document.getElementById('slider__btn__left__espacios');
    const btnRight = document.getElementById('slider__btn__right__espacios');
    let currentIndex = 0;

    const showImage = (index) => {
        images.forEach((img, i) => {
            img.classList.remove('active');
            if (i === index) {
                img.classList.add('active');
            }
        });
    };

    const showNextImage = () => {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    };

    const showPrevImage = () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    };

    // Inicializa el slider
    images[currentIndex].classList.add('active');
    setInterval(showNextImage, 3000); // Cambia de imagen cada 3 segundos

    // Control de botones
    btnRight.addEventListener('click', showNextImage);
    btnLeft.addEventListener('click', showPrevImage);
});
</script>