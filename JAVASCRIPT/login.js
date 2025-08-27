// login.js

let idiomaActual = 'es'; // idioma inicial: español

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

  // Formulario login
  "Iniciar Sesión": "Login",
  "Nombre de Usuario:": "Username:",
  "Correo Electrónico:": "Email:",
  "Contraseña:": "Password:",
  "Iniciar Sesión": "Login",
  "Términos de Servicio | Política de Privacidad": "Terms of Service | Privacy Policy",
  "¿Ya tienes una cuenta?:": "¿Already have an account?",
  "Registrarse Aqui:": "Register Here",

  // Footer
  "Opciones:": "Options",
  "Artes Visuales": "Visual Arts",
  "Bellas Artes": "Fine Arts",
  "Artes Gráficas": "Graphic Arts",
  "Artes Populares": "Folk Arts",
  "Arte Contemporáneo": "Contemporary Art",
  "Aviso Legal:": "Legal Notice",
  "Política de Privacidad": "Privacy Policy",
  "Términos de Servicio": "Terms of Service",
  "Contáctanos": "Contact Us",
};

function traducirPagina() {
  const elementos = document.querySelectorAll(
    "h1, h2, h3, p, a, button, label"
  );

  elementos.forEach(el => {
    let texto = el.innerText.trim();

    if (idiomaActual === 'es' && traducciones[texto]) {
      el.innerText = traducciones[texto];
    } else if (idiomaActual === 'en') {
      // buscar clave original para traducir al español
      const claveOriginal = Object.entries(traducciones).find(([key, val]) => val === texto);
      if (claveOriginal) {
        el.innerText = claveOriginal[0];
      }
    }
  });

  // Cambiar placeholders de inputs
  const inputs = document.querySelectorAll("input");

  inputs.forEach(input => {
    const ph = input.getAttribute("placeholder");
    if (ph) {
      if (idiomaActual === 'es') {
        // traducir placeholder si existe traduccion
        if (traducciones[ph]) {
          input.setAttribute("placeholder", traducciones[ph]);
        }
      } else {
        // revertir placeholder (de inglés a español)
        const claveOriginal = Object.entries(traducciones).find(([key, val]) => val === ph);
        if (claveOriginal) {
          input.setAttribute("placeholder", claveOriginal[0]);
        }
      }
    }
  });

  idiomaActual = idiomaActual === 'es' ? 'en' : 'es';
}

document.getElementById("translate-btn").addEventListener("click", traducirPagina);
