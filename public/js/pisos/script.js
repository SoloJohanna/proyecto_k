document.addEventListener("DOMContentLoaded", (event) => {

    let dropdowns = document.querySelectorAll(".dropdown");
    dropdowns.forEach(dropdown => {
        const menu = dropdown.querySelector(".menu");
        dropdown.addEventListener("click", () => {
            if (menu.style.display == "block") {
                menu.style.display = "none"
            }
            else {
                menu.style.display = "block"
            }

        })
    })

    /*Funcion para cambiar el icono de flecha del boton del encabezado
      ya que por css no se podia realizar*/
    let botonDos = document.querySelector("#encabezadoPlantasBotonDos");
    botonDos.addEventListener("mouseover", () => {
        document.querySelector("#svgPathPlantasFlechaAbajo").style.stroke = "black"
    })
    botonDos.addEventListener("mouseleave", () => {
        document.querySelector("#svgPathPlantasFlechaAbajo").style.stroke = "white"
    })


    /* Comportamiento formulario */
    const form = document.getElementById("contact-form");
    const loadingPopup = document.getElementById("loading-popup");

    if (form) {
        form.addEventListener("submit", (event) => {
            // Muestra el popup de carga
            loadingPopup.classList.add("show");
        });
    }

    const popup = document.getElementById("custom-popup");
    const closeButton = document.getElementById("popup-close");

    if (popup) {
        // Mostrar el popup automáticamente si existe
        popup.classList.add("show");

        // Cerrar el popup al hacer clic en el botón
        closeButton.addEventListener("click", () => {
            popup.classList.remove("show");
        });
    }
});

