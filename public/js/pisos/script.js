document.addEventListener("DOMContentLoaded", (event) => {

    let dropdowns = document.querySelectorAll(".dropdown");
    dropdowns.forEach(dropdown=>{
        const menu = dropdown.querySelector(".menu");
        dropdown.addEventListener("click", ()=>{
            if (menu.style.display == "block"){
                menu.style.display = "none"
            }
            else{
                menu.style.display = "block"
            }
            
        })
    })

    //Seleccionamos los botones a ejecutar
    btn_previus = document.getElementById("previusSlide");
    btn_next = document.getElementById("nextSlide");
    btn_previus.addEventListener("click", ()=>{previousSlide("slider-slide");});
    btn_next.addEventListener("click", ()=>{nextSlide("slider-slide");});
    pisos_btn_previus = document.getElementById("pisos-previusSlide");
    pisos_btn_next = document.getElementById("pisos-nextSlide");
    btn_firts_image = document.getElementById("imagen1");
    btn_second_image = document.getElementById("imagen2");
    btn_third_image = document.getElementById("imagen3");


    //Slider movile


    //Ejecutamos las funciones para mover las imagenes
    pisos_btn_previus.addEventListener("click", ()=>{previousSlide("pisos-slider-slide");});
    pisos_btn_next.addEventListener("click", ()=>{nextSlide("pisos-slider-slide");});
    

    let slideIndex = 1;


function nextSlide(selector_name) {
    showSlides(slideIndex += 1, selector_name);
}


function previousSlide(selector_name) {
    showSlides(slideIndex -= 1, selector_name);  
}


function currentSlide(n, selector_name) {
    showSlides(slideIndex = n, selector_name);
}


function showSlides(n, selector_name) {
    let i;
    let slides = document.getElementsByClassName(selector_name);
    
    if (n > slides.length) {
    slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }

    for (let slide of slides) {
        slide.style.display = "none";
    }   
    slides[slideIndex - 1].style.display = "flex"; 
}


  /*Funcion para cambiar el icono de flecha del boton del encabezado
    ya que por css no se podia realizar*/
    

    let botonDos = document.getElementById("encabezadoBotonDos");
    botonDos.addEventListener("mouseover", ()=>{
        document.getElementById("svgPathFlechaAbajo").style.stroke = "black"
    })
    botonDos.addEventListener("mouseleave", ()=>{
        document.getElementById("svgPathFlechaAbajo").style.stroke = "white"
    })


    btn_firts_image.addEventListener("click", ()=>{currentSlide(2, "pisos-slider-slide");});
    btn_second_image.addEventListener("click", ()=>{currentSlide(1, "pisos-slider-slide");});
    btn_third_image.addEventListener("click", ()=>{currentSlide(0, "pisos-slider-slide");});


});

