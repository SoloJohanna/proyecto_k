document.addEventListener("DOMContentLoaded", (event) => {

    //Funciones para poder gestionar el modo mobile
    boton_encabezado_titulo = document.querySelector("#btn-saber-mas-encabezado");
    if(screen.width<= 667){
        boton_encabezado_titulo.innerHTML = "CONOCE MAS SOBRE PROYECTO K";
    }
    else{
        boton_encabezado_titulo.innerHTML = "<strong>PLANTA GENERAL</strong> | CONOCE MÁS SOBRE EL PROYECTO K"
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

    // Es para asignarle el elemento display y evitar el error de retraso al hacer click sobre el boton
    var bloques_info = document.querySelectorAll(".caracteristicas__bloque__info");
    bloques_info.forEach((element)=>{
        element.style.display = "none";
    });
    
    let botones = document.querySelectorAll(".caracteristicas-boton");
    let informacion = [
        '<div style="font-family:monospace;text-align:left;"><p>Departamentos amplios<br> desde 198,92 m²<br><br>Opciones de 3 y 4<br> dormitorios, 5 baños</p></div>',
        '<div style="font-family:monospace;text-align:left;"><p>Una ubicación<br>privilegiada, con<br>orientación norte.emplazado en Quinta Junge,<br>sector de alta plusvalía y<br>baja densidad.</p></div>',
        '<div style="font-family:monospace;text-align:left;"><p>Espacios comunes:</p><ul><li>Gimnasio</li> <li>sala multiuso</li><li>piscina</li><li>quinchos</li> <li>bicicleteros</li></ul> <p>Seguridad & Tecnología:</p><ul><li>Control de acceso digital</li><li>videoportero</li><li>respaldo eléctrico</li><li>cierre perimetral.</li></ul></div>',
        '<div style="font-family:monospace;text-align:left;"><p>Eficiencia energética:</p><ul><li>Ventanas termopanel</li><li>iluminación LED</li><li>envolvente térmica.</li></ul><p>Cocinas equipadas:</p><ul><li>Horno</li><li>encimera de inducción</li><li>lavavajillas</li><li>refrigeradores integrables.</li></ul><p>Terrazas premium:</p><ul><li>Parrilla eléctrica</li><li>cierre de cristal templado</li><li>iluminación LED.</li></ul></div>'
    ]

    function mostrar_caracteristicas(indice){
        if (screen.width > 960 ){
            bloques_info.forEach((element, index)=>{
                if(indice == index){
                    return
                }
                element.style.display = "none";
            })
            if(bloques_info[indice].style.display == "none"){
                bloques_info[indice].style.display = "block";
            }else{
                bloques_info[indice].style.display = "none";
            }
        }
        else{
            Swal.fire({
                theme: "dark",
                html: informacion[indice],
                cancelButtonText: "Ok",

            })
        }
    }

    botones.forEach((boton, indice)=>{
        boton.addEventListener("click", (event)=>{
            event.preventDefault();
            mostrar_caracteristicas(indice);
        })
    })
    
});

