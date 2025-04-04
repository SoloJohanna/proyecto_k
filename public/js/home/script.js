document.addEventListener("DOMContentLoaded", (event) => {
    boton_encabezado_titulo = document.getElementById("btn-saber-mas-encabezado");
    if(screen.width<= 667){
        boton_encabezado_titulo.innerHTML = "CONOCE MAS SOBRE PROYECTO K"
    }
    else{
        boton_encabezado_titulo.innerHTML = "<strong>¡OPORTUNIDAD DE COMPRA EN BLANCO!</strong> CONOCE MÁS SOBRE EL PROYECTO K"
    }

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

    let caracteristicas_botones = document.getElementById("caracteristica-botones");
    
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


    //Ejecutamos las funciones para mover las imagenes
    equipamiento_btn_previus = document.getElementById("equipamiento-previusSlide");
    equipamiento_btn_next = document.getElementById("equipamiento-nextSlide");
    equipamiento_btn_previus.addEventListener("click", ()=>{previousSlide("equipamiento-slider-slide");});
    equipamiento_btn_next.addEventListener("click", ()=>{nextSlide("equipamiento-slider-slide");});

    ubicaciones_btn_previus = document.getElementById("ubicaciones-previusSlide");
    ubicaciones_btn_next = document.getElementById("ubicaciones-nextSlide");
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

    window.addEventListener("resize", ()=>{
        boton_encabezado_titulo = document.getElementById("btn-saber-mas-encabezado");
        if(screen.width<= 667){
            boton_encabezado_titulo.innerHTML = "CONOCE MAS SOBRE PROYECTO K"
        }
        else{
            boton_encabezado_titulo.innerHTML = "<strong>¡OPORTUNIDAD DE COMPRA EN BLANCO!</strong> CONOCE MÁS SOBRE EL PROYECTO K"
        }
    })


    //Para poder ocultar el menu cuando se haga click

    //Seleccionamos todos los items-menu
    var nav_list_items = document.querySelectorAll(".nav-list-item");
    var check_button = document.querySelector("#check")

    //Agregar el elemento contacto en el navlist
    check_button.addEventListener("click", ()=>{
        let lista_item = document.createElement("li");
        lista_item.className = "nav-list-li";
        let lista_item_vinculo = document.createElement("a");
        lista_item_vinculo.className = "nav-list-item";
        lista_item_vinculo.href = "#contacto";
        lista_item_vinculo.textContent = "CONTACTO";
        lista_item.appendChild(lista_item_vinculo);
        let nav_list = document.querySelector("#nav-list");
        nav_list.appendChild(lista_item);
        lista_item_vinculo.addEventListener("click", ()=>{
            check_button.click();
        })
        
    })
    
    //Reccorremos toda la lista de items y ponemos a la escucha el clik para marcar el check
    nav_list_items.forEach((e)=>{
        e.addEventListener("click", ()=>{
            check_button.click();
        })
    })

});

