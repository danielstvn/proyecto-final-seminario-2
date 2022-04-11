const slider = document.querySelector("#slider");
const sliderSection = document.querySelectorAll(".slider-section");
const sliderSectionLast = sliderSection[sliderSection.length-1];


slider.insertAdjacentElement('afterbegin',sliderSectionLast);

Next=() =>{
    const sliderSectionFirst = document.querySelectorAll(".slider-section")[0];
    slider.style.marginleft = "-200%";
    slider.style.transition = "all 0.5s";
    setTimeout(Element =>{
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend',sliderSectionFirst);
        slider.style.marginleft="-100%";
    },500);
}

Preview =()=>{
    const sliderSectionFirst = document.querySelectorAll(".slider-section");
    const sliderSectionLast = sliderSection[sliderSection.length-1];
    slider.style.marginleft = "0";
    slider.style.transition = "all 0.5s";
    setTimeout(Element =>{
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin',sliderSectionLast);
        slider.style.marginleft="-100%";
    },500);
}


setInterval(Next(), 500);