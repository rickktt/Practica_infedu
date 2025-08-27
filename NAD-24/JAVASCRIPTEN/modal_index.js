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
    title: "WHAT IS ART?",
    texts: [
      "Art is a universal form of expression that conveys ideas and emotions.",
      "It manifests in different disciplines: painting, sculpture, music, dance, and more.",
      "It is a means of communication that transcends cultures and eras.",
      "It connects us with the deepest aspects of human creativity."
    ]
  },
  tres: {
    title: "WHAT DOES IT GIVE US?",
    texts: [
      "Art enriches our daily lives.",
      "It fosters creativity, imagination, and critical thinking.",
      "It promotes respect for cultural diversity.",
      "It inspires us to transform our reality and environment."
    ]
  },
  cinco: {
    title: "WELCOME",
    texts: [
      "Welcome to this space dedicated to art!",
      "Here you will find a journey through different artistic expressions.",
      "The goal is to learn, explore, and enjoy together.",
      "We hope you discover your own connection with art."
    ]
  },
  siete: {
    title: "ABOUT NAD",
    texts: [
      "NAD is a project that seeks to bring art closer to everyone.",
      "We promote learning in a creative and interactive way.",
      "We believe art is a bridge to reflection and unity.",
      "Thank you for being part of this experience."
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