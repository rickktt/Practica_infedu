document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("myModal");
  const closeBtn = modal.querySelector(".close");

  const titleEl = document.getElementById("modalTitle");
  const textEls = [
    document.getElementById("modalText1"),
    document.getElementById("modalText2"),
    document.getElementById("modalText3"),
    document.getElementById("modalText4"),
  ];

  const contentByClass = {
    uno: {
      title: "¿QUÉ ES ARTE?",
      texts: [
        "El arte es una forma de expresión universal que transmite ideas y emociones.",
        "Se manifiesta en distintas disciplinas: pintura, escultura, música, danza y más.",
        "Es un medio de comunicación que trasciende culturas y épocas.",
        "Nos conecta con lo más profundo de la creatividad humana."
      ]
    },
    tres: {
      title: "¿QUÉ NOS APORTA?",
      texts: [
        "El arte enriquece nuestra vida cotidiana.",
        "Fomenta la creatividad, la imaginación y el pensamiento crítico.",
        "Promueve el respeto por la diversidad cultural.",
        "Inspira a transformar nuestra realidad y entorno."
      ]
    },
    cinco: {
      title: "BIENVENID@S",
      texts: [
        "¡Bienvenid@s a este espacio dedicado al arte!",
        "Aquí encontrarás un recorrido por distintas expresiones artísticas.",
        "El objetivo es aprender, explorar y disfrutar juntos.",
        "Esperamos que descubras tu propio vínculo con el arte."
      ]
    },
    siete: {
      title: "ACERCA DE NAD",
      texts: [
        "NAD es un proyecto que busca acercar el arte a todas las personas.",
        "Promovemos el aprendizaje de manera creativa e interactiva.",
        "Creemos que el arte es un puente hacia la reflexión y la unión.",
        "Gracias por ser parte de esta experiencia."
      ]
    }
  };

  document.querySelectorAll(".uno, .tres, .cinco, .siete").forEach(el => {
    el.addEventListener("click", () => {

      const foundKey = Object.keys(contentByClass).find(key =>
        el.classList.contains(key)
      );
      if (foundKey) {
        const content = contentByClass[foundKey];
        titleEl.textContent = content.title;

        textEls.forEach((p, idx) => {
          p.textContent = content.texts[idx] || "";
        });

        modal.style.display = "block";
      }
    });
  });


  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });

  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  });

  window.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      modal.style.display = "none";
    }
  });
});