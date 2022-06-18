const slider = document.querySelector('.slider');
const sliderLine = document.querySelector('.slider__line');
const images = document.querySelectorAll('.slider__line img');

const arrowRight = document.querySelector('.slider__arrow-right');
const arrowLeft = document.querySelector('.slider__arrow-left');

let width = slider.offsetWidth;
let count = 0;

window.addEventListener('resize', () =>{
    sliderLine.style.width = width * images.length + 'px';
    images.forEach(image => {
        image.style.width = width + 'px';
        image.style.height = 'auto';
    });
});

arrowLeft.onclick = () =>{
    count++;
    if(count == images.length){
        count = 0;
    }
    start();
}

arrowRight.onclick = () =>{
    count--;
    if(count < 0){
        count = images.length - 1;
    }
    start();
}

function start(){
    sliderLine.style.transform = 'translateX(-' + count * width + 'px)';
}

