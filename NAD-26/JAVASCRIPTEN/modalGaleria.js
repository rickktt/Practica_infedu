document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("obraModal");
  const closeBtn = modal.querySelector(".close1");

  const pinceles = document.querySelectorAll(".pincel");

  pinceles.forEach(pincel => {
    pincel.addEventListener("click", () => {
      const cuadro = pincel.closest(".cuadro");
      const obraImg = cuadro.querySelector(".obra");

      document.getElementById("modal-img").src = obraImg.src;
      document.getElementById("modal-img").alt = pincel.dataset.title;
      document.getElementById("modal-title").textContent = pincel.dataset.title;
      document.getElementById("modal-autor").textContent = pincel.dataset.autor;
      document.getElementById("modal-ubicacion").textContent = pincel.dataset.ubicacion;
      document.getElementById("modal-anio").textContent = pincel.dataset.anio;
      document.getElementById("modal-desc").textContent = pincel.dataset.desc;

      modal.style.display = "block";
    });
  });

  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });

  window.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  });
});
