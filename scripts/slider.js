// slider.js
let currentIndex = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    if (index < 0) {
        currentIndex = slides.length - 1;
    } else if (index >= slides.length) {
        currentIndex = 0;
    } else {
        currentIndex = index;
    }

    const transformValue = -currentIndex * 100 + '%';
    document.getElementById('slider').style.transform = `translateX(${transformValue})`;
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

// Cambia las imágenes cada 3 segundos (3000 milisegundos)
setInterval(nextSlide, 3000);
