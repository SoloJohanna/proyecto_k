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
    if(screen.width<= 720){
        console.log("Estoy aqui")
        boton_encabezado_titulo.innerHTML = "CONOCE MAS SOBRE PROYECTO K"
    }
    else{
        boton_encabezado_titulo.innerHTML = "<strong>PLANTA GENERAL |</strong> CONOCE MÁS SOBRE EL PROYECTO K"
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


    

});

