// traductorRegister.js

let idiomaActual = 'es'; // Idioma por defecto

const traducciones = {
  // Header y menú
  "Inicio": "Home",
  "Artes Visuales": "Visual Arts",
  "Arte": "Art",
  "Arte Contemporáneo": "Contemporary Art",
  "Artes Plásticas": "Plastic Arts",
  "Artes Gráficas": "Graphic Arts",
  "Artes Populares": "Folk Arts",
  "Galería": "Gallery",
  "Acerca de": "About Us",
  "Iniciar Sesión": "Login",
  "Registrarse": "Register",

  // Formulario Registro
  "Registro": "Register",
  "Nombre:": "Name:",
  "Digite su nombre": "Enter your name",
  "Nombre de Usuario:": "Username:",
  "Digite el nombre de usuario": "Enter your username",
  "Correo Electrónico:": "Email:",
  "Digite el correo electrónico": "Enter your email",
  "Contraseña:": "Password:",
  "Digite la contraseña": "Enter your password",
  "Confirmar Contraseña:": "Confirm Password:",
  "Reeescriba su contraseña": "Re-enter your password",
  "Registrarse": "Register",
  "Términos de Servicio | Política de Privacidad": "Terms of Service | Privacy Policy",
  "¿Ya tienes una cuenta?": "Already have an account?",
  "Inicia Sesión aquí": "Log in here",

  // Footer
  "Opciones": "Options",
  "Artes Visuales": "Visual Arts",
  "Bellas Artes": "Fine Arts",
  "Artes Gráficas": "Graphic Arts",
  "Artes Populares": "Folk Arts",
  "Arte Contemporáneo": "Contemporary Art",
  "Aviso Legal": "Legal Notice",
  "Política de Privacidad": "Privacy Policy",
  "Términos de Servicio": "Terms of Service",
  "Contáctanos": "Contact Us",
};

function traducirPagina() {
  const elementos = document.querySelectorAll(
    "h1, h2, h3, p, a, button, label, input, span"
  );

  elementos.forEach((el) => {
    let texto = el.innerText.trim();

    // Para inputs, usamos placeholder
    if (el.tagName.toLowerCase() === "input") {
      let ph = el.getAttribute("placeholder");
      if (ph && idiomaActual === "es" && traducciones[ph]) {
        el.setAttribute("placeholder", traducciones[ph]);
      } else if (ph && idiomaActual === "en") {
        // revertir placeholder
        const claveOriginal = Object.entries(traducciones).find(
          ([key, val]) => val === ph
        );
        if (claveOriginal) el.setAttribute("placeholder", claveOriginal[0]);
      }
      return; // saltar texto de input
    }

    if (idiomaActual === "es" && traducciones[texto]) {
      el.innerText = traducciones[texto];
    } else if (idiomaActual === "en") {
      const claveOriginal = Object.entries(traducciones).find(
        ([key, val]) => val === texto
      );
      if (claveOriginal) el.innerText = claveOriginal[0];
    }
  });

  idiomaActual = idiomaActual === "es" ? "en" : "es";
}


document.getElementById("translate-btn").addEventListener("click", traducirPagina);
