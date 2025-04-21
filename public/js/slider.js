const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length - 1];

const btn__left = document.querySelector("#slider__btn__left");
const btn__right = document.querySelector("#slider__btn__right");

slider.insertAdjacentElement('afterbegin', sliderSectionLast)

function next(){
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 0.5s linear"
    setTimeout(()=>{
        slider.style.transition = "none";
        slider.insertAdjacentElement("beforeend", sliderSectionFirst);
        slider.style.marginLeft = "-100%"

    }, 500)
}

function prev(){
    let sliderSection = document.querySelectorAll(".slider__section");
    let sliderSectionLast = sliderSection[sliderSection.length - 1];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 0.5s linear"
    setTimeout(()=>{
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin', sliderSectionLast)
        slider.style.marginLeft = "-100%"

    }, 500)
}


btn__right.addEventListener("click", function(){
    next();
})

btn__left.addEventListener("click", function(){
    prev();
})

setInterval(()=>{
    next()
}, 5000)


const sliderUbicacion = document.querySelector("#slider__ubicacion");
let sliderSectionUbicacion = document.querySelectorAll(".slider__section__ubicacion");
let sliderSectionUbicacionLast = sliderSectionUbicacion[sliderSectionUbicacion.length - 1];

const btn__left__ubicacion = document.querySelector("#slider__btn__left__ubicacion");
const btn__right__ubicacion = document.querySelector("#slider__btn__right__ubicacion");

sliderUbicacion.insertAdjacentElement('afterbegin', sliderSectionUbicacionLast)

function next_ubicacion(){
    let sliderSectionUbicacionFirst = document.querySelectorAll(".slider__section__ubicacion")[0];
    sliderUbicacion.style.marginLeft = "-200%";
    sliderUbicacion.style.transition = "all 0.5s linear"
    setTimeout(()=>{
        sliderUbicacion.style.transition = "none";
        sliderUbicacion.insertAdjacentElement("beforeend", sliderSectionUbicacionFirst);
        sliderUbicacion.style.marginLeft = "-100%"

    }, 500)
}

function prev_ubicacion(){
    let sliderSectionUbicacion = document.querySelectorAll(".slider__section__ubicacion");
    let sliderSectionUbicacionLast = sliderSectionUbicacion[sliderSectionUbicacion.length - 1];
    sliderUbicacion.style.marginLeft = "0";
    sliderUbicacion.style.transition = "all 0.5s linear"
    setTimeout(()=>{
        sliderUbicacion.style.transition = "none";
        sliderUbicacion.insertAdjacentElement('afterbegin', sliderSectionUbicacionLast)
        sliderUbicacion.style.marginLeft = "-100%"

    }, 500)
}


btn__right__ubicacion.addEventListener("click", function(){
    next_ubicacion();
})

btn__left__ubicacion.addEventListener("click", function(){
    prev_ubicacion();
})

setInterval(()=>{
    next_ubicacion()
}, 5000)
