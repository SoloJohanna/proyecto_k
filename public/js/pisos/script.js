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

    boton_encabezado_titulo = document.getElementById("btn-saber-mas-encabezado");
    if(screen.width<= 600){
        boton_encabezado_titulo.innerHTML = "CONOCE MAS SOBRE PROYECTO K"
         document.querySelector("#nav-list-item-contacto").style.display = "block"
    }
    else{
        boton_encabezado_titulo.innerHTML = "<strong>¡OPORTUNIDAD DE COMPRA EN BLANCO!</strong> CONOCE MÁS SOBRE EL PROYECTO K"
        document.querySelector("#nav-list-item-contacto").style.display = "none"
    }


    //Seleccionamos los botones a ejecutar
    btn_previus = document.getElementById("previusSlide");
    btn_next = document.getElementById("nextSlide");
    btn_previus.addEventListener("click", ()=>{previousSlide("slider-slide");});
    btn_next.addEventListener("click", ()=>{nextSlide("slider-slide");});
    btn_firts_image = document.getElementById("imagen1");
    btn_second_image = document.getElementById("imagen2");
    btn_third_image = document.getElementById("imagen3");


    //Slider movile


    //Ejecutamos las funciones para mover las imagenes
    pisos_btn_previus = document.getElementById("pisos-previusSlide");
    pisos_btn_next = document.getElementById("pisos-nextSlide");
    pisos_btn_previus.addEventListener("click", ()=>{previousSlide("pisos-slider-slide");});
    pisos_btn_next.addEventListener("click", ()=>{nextSlide("pisos-slider-slide");});

    espacios_btn_previus = document.getElementById("espacios-previusSlide");
    espacios_btn_next = document.getElementById("espacios-nextSlide");
    espacios_btn_previus.addEventListener("click", ()=>{previousSlide("espacios-slider-slide");});
    espacios_btn_next.addEventListener("click", ()=>{nextSlide("espacios-slider-slide");});
    

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
    

    let botonDos = document.querySelector("#encabezadoPlantasBotonDos");
    botonDos.addEventListener("mouseover", ()=>{
        document.querySelector("#svgPathPlantasFlechaAbajo").style.stroke = "black"
    })
    botonDos.addEventListener("mouseleave", ()=>{
        document.querySelector("#svgPathPlantasFlechaAbajo").style.stroke = "white"
    })


    btn_firts_image.addEventListener("click", ()=>{currentSlide(2, "pisos-slider-slide");});
    btn_second_image.addEventListener("click", ()=>{currentSlide(1, "pisos-slider-slide");});
    btn_third_image.addEventListener("click", ()=>{currentSlide(0, "pisos-slider-slide");});

    //Para poder ocultar el menu cuando se haga click
    

    var nav_list_items = document.querySelectorAll(".nav-list-item");
    var check_button = document.querySelector("#check")

    //Agregar el elemento contacto en el navlist
    
    //Reccorremos toda la lista de items y ponemos a la escucha el clik para marcar el check
    nav_list_items.forEach((e)=>{
        e.addEventListener("click", ()=>{
            check_button.click();
        })
    })

    //Cambia el texto en el modo movile
    window.addEventListener("resize", ()=>{
        boton_encabezado_titulo = document.getElementById("btn-saber-mas-encabezado");
        console.log(boton_encabezado_titulo.innerHTML)
        if(screen.width<= 667){
            boton_encabezado_titulo.innerHTML = "CONOCE MAS SOBRE PROYECTO K"
            document.querySelector("#nav-list-item-contacto").style.display = "block"
        }
        else{
            boton_encabezado_titulo.innerHTML = "<strong>¡OPORTUNIDAD DE COMPRA EN BLANCO!</strong> CONOCE MÁS SOBRE EL PROYECTO K"
            document.querySelector("#nav-list-item-contacto").style.display = "none"
        }
    })

});

