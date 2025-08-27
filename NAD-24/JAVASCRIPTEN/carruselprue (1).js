const carouselImages = document.getElementById('carouselImages');
const slides = document.querySelectorAll('.slide');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let counter = 0;
const size = 400; // ancho de cada slide en px

nextBtn.addEventListener('click', () => {
  counter++;
  if (counter >= slides.length) {
    counter = 0;
  }
  updateCarousel();
});

prevBtn.addEventListener('click', () => {
  counter--;
  if (counter < 0) {
    counter = slides.length - 1;
  }
  updateCarousel();
});

function updateCarousel() {
  carouselImages.style.transform = `translateX(${-size * counter}px)`;
}
