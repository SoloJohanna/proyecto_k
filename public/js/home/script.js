document.addEventListener("DOMContentLoaded", (event) => {
    let caracteristicas_boton_uno = document.getElementById("caracteristicas-boton-uno");
    let caracteristicas_boton_dos = document.getElementById("caracteristicas-boton-dos");
    let caracteristicas_boton_tres = document.getElementById("caracteristicas-boton-tres");
    let caracteristicas_boton_cuatro = document.getElementById("caracteristicas-boton-cuatro");
    caracteristicas_boton_uno.addEventListener("click", (event)=>{
        event.preventDefault();
        let caracteristicas_bloque_info = document.getElementById("caracteristicas-bloque-info");
        let caracteristicas_bloque_info_dos = document.getElementById("caracteristicas-bloque-info-dos");
        let caracteristicas_bloque_info_tres = document.getElementById("caracteristicas-bloque-info-tres");
        let caracteristicas_bloque_info_cuatro = document.getElementById("caracteristicas-bloque-info-cuatro");
        caracteristicas_bloque_info_dos.style.display = "none"
        caracteristicas_bloque_info_tres.style.display = "none"
        caracteristicas_bloque_info_cuatro.style.display = "none"
        if(caracteristicas_bloque_info.style.display == "none"){
            caracteristicas_bloque_info.style.display = "block";
        }else{
            caracteristicas_bloque_info.style.display = "none";
        }
        
    })
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
        
    })
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
});

