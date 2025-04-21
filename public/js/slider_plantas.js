const sliderEspacios = document.querySelector("#slider__espacios");
let sliderSectionEspacios = document.querySelectorAll(".slider__section__espacios");
let sliderSectionEspaciosLast = sliderSectionEspacios[sliderSectionEspacios.length - 1];

const btn__left__espacios = document.querySelector("#slider__btn__left__espacios");
const btn__right__espacios = document.querySelector("#slider__btn__right__espacios");

sliderEspacios.insertAdjacentElement('afterbegin', sliderSectionEspaciosLast)

function next_espacios(){
    let sliderSectionEspaciosFirst = document.querySelectorAll(".slider__section__espacios")[0];
    sliderEspacios.style.marginLeft = "-200%";
    sliderEspacios.style.transition = "all 0.5s linear"
    setTimeout(()=>{
        sliderEspacios.style.transition = "none";
        sliderEspacios.insertAdjacentElement("beforeend", sliderSectionEspaciosFirst);
        sliderEspacios.style.marginLeft = "-100%"

    }, 500)
}

function prev_espacios(){
    let sliderSectionEspacios = document.querySelectorAll(".slider__section__espacios");
    let sliderSectionEspaciosLast = sliderSectionEspacios[sliderSectionEspacios.length - 1];
    sliderEspacios.style.marginLeft = "0";
    sliderEspacios.style.transition = "all 0.5s linear"
    setTimeout(()=>{
        sliderEspacios.style.transition = "none";
        sliderEspacios.insertAdjacentElement('afterbegin', sliderSectionEspaciosLast)
        sliderEspacios.style.marginLeft = "-100%"

    }, 500)
}


btn__right__espacios.addEventListener("click", function(){
    next_espacios();
})

btn__left__espacios.addEventListener("click", function(){
    prev_espacios();
})

setInterval(()=>{
    next_espacios()
}, 5000)

const sliderFloor = document.querySelector("#slider__floor");
let sliderSectionFloor = document.querySelectorAll(".slider__section__floor");
let sliderSectionFloorLast = sliderSectionFloor[sliderSectionFloor.length - 1];

const btn__left__floor = document.querySelector("#slider__btn__left__floor");
const btn__right__floor = document.querySelector("#slider__btn__right__floor");

sliderFloor.insertAdjacentElement('afterbegin', sliderSectionFloorLast)

function next_floor(){
    let sliderSectionFloorFirst = document.querySelectorAll(".slider__section__floor")[0];
    sliderFloor.style.marginLeft = "-200%";
    sliderFloor.style.transition = "all 0.5s linear"
    setTimeout(()=>{
        sliderFloor.style.transition = "none";
        sliderFloor.insertAdjacentElement("beforeend", sliderSectionFloorFirst);
        sliderFloor.style.marginLeft = "-100%"

    }, 500)
}

function prev_floor(){
    let sliderSectionFloor = document.querySelectorAll(".slider__section__floor");
    let sliderSectionFloorLast = sliderSectionFloor[sliderSectionFloor.length - 1];
    sliderFloor.style.marginLeft = "0";
    sliderFloor.style.transition = "all 0.5s linear"
    setTimeout(()=>{
        sliderFloor.style.transition = "none";
        sliderFloor.insertAdjacentElement('afterbegin', sliderSectionFloorLast)
        sliderFloor.style.marginLeft = "-100%"

    }, 500)
}


btn__right__floor.addEventListener("click", function(){
    next_floor();
})

btn__left__floor.addEventListener("click", function(){
    prev_floor();
})

setInterval(()=>{
    next_floor()
}, 5000)

const sliderPisos = document.querySelector("#slider__pisos");
let sliderSectionPisos = document.querySelectorAll(".slider__section__pisos");
let sliderSectionPisosLast = sliderSectionPisos[sliderSectionPisos.length - 1];

const btn__left__pisos = document.querySelector("#slider__btn__left__pisos");
const btn__right__pisos = document.querySelector("#slider__btn__right__pisos");

sliderPisos.insertAdjacentElement('afterbegin', sliderSectionPisosLast)

function next_pisos(){
    let sliderSectionPisosFirst = document.querySelectorAll(".slider__section__pisos")[0];
    sliderPisos.style.marginLeft = "-200%";
    sliderPisos.style.transition = "all 0.5s linear"
    setTimeout(()=>{
        sliderPisos.style.transition = "none";
        sliderPisos.insertAdjacentElement("beforeend", sliderSectionPisosFirst);
        sliderPisos.style.marginLeft = "-100%"

    }, 500)
}

function prev_pisos(){
    let sliderSectionPisos = document.querySelectorAll(".slider__section__pisos");
    let sliderSectionPisosLast = sliderSectionPisos[sliderSectionPisos.length - 1];
    sliderPisos.style.marginLeft = "0";
    sliderPisos.style.transition = "all 0.5s linear"
    setTimeout(()=>{
        sliderPisos.style.transition = "none";
        sliderPisos.insertAdjacentElement('afterbegin', sliderSectionPisosLast)
        sliderPisos.style.marginLeft = "-100%"

    }, 500)
}


btn__right__pisos.addEventListener("click", function(){
    next_pisos();
})

btn__left__pisos.addEventListener("click", function(){
    prev_pisos();
})

// setInterval(()=>{
//     next_pisos()
// }, 5000)