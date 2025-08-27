const carrusel = document.querySelector(".carrusel");
const btnIzq = document.querySelector(".izquierda");
const btnDer = document.querySelector(".derecha");

const scrollAmount = 380;
let currentIndex = 0;
const totalItems = carrusel.children.length;


btnDer.addEventListener("click", () => {
  currentIndex++;
  
  if (currentIndex >= totalItems) {
    
    currentIndex = 0;
    carrusel.scrollTo({ left: 0, behavior: "smooth" });
  } else {
    carrusel.scrollBy({ left: scrollAmount, behavior: "smooth" });
  }
});

btnIzq.addEventListener("click", () => {
  currentIndex--;
  
  if (currentIndex < 0) {
    currentIndex = totalItems - 1;
    const maxScroll = carrusel.scrollWidth - carrusel.clientWidth;
    carrusel.scrollTo({ left: maxScroll, behavior: "smooth" });
  } else {
    carrusel.scrollBy({ left: -scrollAmount, behavior: "smooth" });
  }
});