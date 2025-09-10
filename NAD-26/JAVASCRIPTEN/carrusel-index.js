const carrusel = document.querySelector(".carrusel");
const btnIzq = document.querySelector(".izquierda");
const btnDer = document.querySelector(".derecha");

const scrollAmount = 380;

btnDer.addEventListener("click", () => {
  carrusel.scrollBy({ left: scrollAmount, behavior: "smooth" });
});

btnIzq.addEventListener("click", () => {
  carrusel.scrollBy({ left: -scrollAmount, behavior: "smooth" });
});
