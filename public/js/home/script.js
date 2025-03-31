document.addEventListener("DOMContentLoaded", (event) => {

    var caracteristicas_bloque_info = document.getElementById("caracteristicas-bloque-info");
    var caracteristicas_bloque_info_dos = document.getElementById("caracteristicas-bloque-info-dos");
    var caracteristicas_bloque_info_tres = document.getElementById("caracteristicas-bloque-info-tres");
    var caracteristicas_bloque_info_cuatro = document.getElementById("caracteristicas-bloque-info-cuatro");
    caracteristicas_bloque_info.style.display = "none"
    caracteristicas_bloque_info_dos.style.display = "none"
    caracteristicas_bloque_info_tres.style.display = "none"
    caracteristicas_bloque_info_cuatro.style.display = "none"

    let caracteristicas_boton_uno = document.getElementById("caracteristicas-boton-uno");
    let caracteristicas_boton_dos = document.getElementById("caracteristicas-boton-dos");
    let caracteristicas_boton_tres = document.getElementById("caracteristicas-boton-tres");
    let caracteristicas_boton_cuatro = document.getElementById("caracteristicas-boton-cuatro");
    
    /*Funcion para cambiar el icono de flecha del boton del encabezado
    ya que por css no se podia realizar*/
    

    let botonDos = document.getElementById("encabezadoBotonDos");
    botonDos.addEventListener("mouseover", ()=>{
        document.getElementById("svgPathFlechaAbajo").style.stroke = "black"
    })
    botonDos.addEventListener("mouseleave", ()=>{
        document.getElementById("svgPathFlechaAbajo").style.stroke = "white"
    })

    caracteristicas_boton_uno.addEventListener("click", (event)=>{
        event.preventDefault();
        caracteristicas_bloque_info_dos.style.display = "none"
        caracteristicas_bloque_info_tres.style.display = "none"
        caracteristicas_bloque_info_cuatro.style.display = "none"
        if(caracteristicas_bloque_info.style.display == "none"){
            caracteristicas_bloque_info.style.display = "block";
        }else{
            caracteristicas_bloque_info.style.display = "none";
        }
        
    });

    caracteristicas_boton_dos.addEventListener("click", (event)=>{
        event.preventDefault();
        let caracteristicas_bloque_info = document.getElementById("caracteristicas-bloque-info");
        let caracteristicas_bloque_info_dos = document.getElementById("caracteristicas-bloque-info-dos");
        let caracteristicas_bloque_info_tres = document.getElementById("caracteristicas-bloque-info-tres");
        let caracteristicas_bloque_info_cuatro = document.getElementById("caracteristicas-bloque-info-cuatro");
        caracteristicas_bloque_info.style.display = "none"
        caracteristicas_bloque_info_tres.style.display = "none"
        caracteristicas_bloque_info_cuatro.style.display = "none"
        if(caracteristicas_bloque_info_dos.style.display == "none"){
            caracteristicas_bloque_info_dos.style.display = "block";
        }else{
            caracteristicas_bloque_info_dos.style.display = "none";
        }
        
    });

    caracteristicas_boton_tres.addEventListener("click", (event)=>{
        event.preventDefault();
        let caracteristicas_bloque_info = document.getElementById("caracteristicas-bloque-info");
        let caracteristicas_bloque_info_dos = document.getElementById("caracteristicas-bloque-info-dos");
        let caracteristicas_bloque_info_tres = document.getElementById("caracteristicas-bloque-info-tres");
        let caracteristicas_bloque_info_cuatro = document.getElementById("caracteristicas-bloque-info-cuatro");
        caracteristicas_bloque_info.style.display = "none"
        caracteristicas_bloque_info_dos.style.display = "none"
        caracteristicas_bloque_info_cuatro.style.display = "none"
        if(caracteristicas_bloque_info_tres.style.display == "none"){
            caracteristicas_bloque_info_tres.style.display = "block";
        }else{
            caracteristicas_bloque_info_tres.style.display = "none";
        }
        
    })
    caracteristicas_boton_cuatro.addEventListener("click", (event)=>{
        event.preventDefault();
        let caracteristicas_bloque_info = document.getElementById("caracteristicas-bloque-info");
        let caracteristicas_bloque_info_dos = document.getElementById("caracteristicas-bloque-info-dos");
        let caracteristicas_bloque_info_tres = document.getElementById("caracteristicas-bloque-info-tres");
        let caracteristicas_bloque_info_cuatro = document.getElementById("caracteristicas-bloque-info-cuatro");
        caracteristicas_bloque_info.style.display = "none"
        caracteristicas_bloque_info_dos.style.display = "none"
        caracteristicas_bloque_info_tres.style.display = "none"
        if(caracteristicas_bloque_info_cuatro.style.display == "none"){
            caracteristicas_bloque_info_cuatro.style.display = "block";
        }else{
            caracteristicas_bloque_info_cuatro.style.display = "none";
        }
        
    })

    /* Menu desplegable*/

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
    ubicaciones_btn_previus = document.getElementById("ubicaciones-previusSlide");
    ubicaciones_btn_next = document.getElementById("ubicaciones-nextSlide");

    //Ejecutamos las funciones para mover las imagenes
    btn_previus.addEventListener("click", ()=>{previousSlide("slider-slide");});
    btn_next.addEventListener("click", ()=>{nextSlide("slider-slide");});
    ubicaciones_btn_previus.addEventListener("click", ()=>{previousSlide("ubicaciones-slider-slide");});
    ubicaciones_btn_next.addEventListener("click", ()=>{nextSlide("ubicaciones-slider-slide");});
    
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
        slides[slideIndex - 1].style.display = "block"; 
    }

});

