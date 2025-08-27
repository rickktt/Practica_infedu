const traducciones = {
  // Menú
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

  // Modal de bienvenida
  "BIENVENIDOS A NAD": "WELCOME TO NAD",
  "Si has llegado hasta aquí, es porque el arte es una pieza clave para ti:": 
    "If you've made it this far, it's because art is a key piece for you:",
  "Una forma de expresar tus sentimientos, explorar tu creatividad, o simplemente un espacio de diversión y comunicación personal.":
    "A way to express your feelings, explore your creativity, or simply a space for fun and personal communication.",

  "Por eso nace NAD (Nice Art of Dreams): un espacio donde podrás aprender, descubrir y compartir todo lo relacionado con las artes visuales.":
    "That's why NAD (Nice Art of Dreams) was born: a space where you can learn, discover, and share everything related to visual arts.",

  "Aquí encontrarás contenido especialmente creado para ti, como:":
    "Here you will find specially created content for you, such as:",

  "📚 La Clasificación de las Artes Visuales.": "📚 The Classification of Visual Arts.",
  "🎨 Las Técnicas que puedes emplear en cada una.": "🎨 The Techniques you can use in each.",
  "💡 Consejos, inspiración y mucho más.": "💡 Tips, inspiration, and much more.",

  "RECUERDA:": "REMEMBER:",
  "El arte no tiene límites, cada sueño es una nueva creación por descubrir.":
    "Art has no limits, each dream is a new creation to discover.",

  "English / Español": "Español / English",
  "Español / English": "English / Español"
};

let idiomaActual = 'es';

function traducirPagina() {
  const elementos = document.querySelectorAll(
    "h1, h2, h3, p, a, button, label, li, strong"
  );

  elementos.forEach(el => {
    let texto = el.innerText.trim();

    if (idiomaActual === 'es' && traducciones[texto]) {
      el.innerText = traducciones[texto];
    } else if (idiomaActual === 'en') {
      const claveOriginal = Object.entries(traducciones).find(([key, val]) => val === texto);
      if (claveOriginal) {
        el.innerText = claveOriginal[0];
      }
    }
  });

  idiomaActual = idiomaActual === 'es' ? 'en' : 'es';
}

document.getElementById("translate-btn").addEventListener("click", traducirPagina);
