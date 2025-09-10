

let idiomaActual = 'es';

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
  "Registrarse": "Sign Up",

  // Títulos y secciones
  "Galería de Arte": "Art Gallery",
  "Opciones": "Options",
  "Aviso Legal": "Legal Notice",
  "Política de Privacidad": "Privacy Policy",
  "Términos de Servicio": "Terms of Service",
  "Contáctanos": "Contact Us",

  // Obras (títulos y textos)
  "LA NOCHE ESTRELLADA": "THE STARRY NIGHT",
  "Vincent Van Gogh": "Vincent Van Gogh",
  "Ubicación: Museo de Arte Moderno, NY": "Location: Museum of Modern Art, NY",
  "Año: 1889": "Year: 1889",
  "Destaca por sus contrastes y significado.": "Noted for its contrasts and meaning.",

  "LA PERSISTENCIA DE LA MEMORIA": "THE PERSISTENCE OF MEMORY",
  "Salvador Dalí": "Salvador Dalí",
  "Revela la distorsión del tiempo y la realidad.": "Reveals the distortion of time and reality.",

  "EL GRITO": "THE SCREAM",
  "Edvard Munch": "Edvard Munch",
  "Ubicación: Galería Nacional, Oslo": "Location: National Gallery, Oslo",
  "Angustia y desesperación existencial.": "Anguish and existential despair.",

  "CAPILLA SIXTINA": "SISTINE CHAPEL",
  "Miguel Ángel": "Michelangelo",
  "Ciudad del Vaticano": "Vatican City",
  "Incluye \"La Creación de Adán\".": "Includes \"The Creation of Adam\".",

  "LA MONA LISA": "MONA LISA",
  "Leonardo da Vinci": "Leonardo da Vinci",
  "Museo del Louvre": "Louvre Museum",
  "Enigmática sonrisa y claroscuro.": "Enigmatic smile and chiaroscuro.",

  "LA JOVEN DE LA PERLA": "GIRL WITH A PEARL EARRING",
  "Johannes Vermeer": "Johannes Vermeer",
  "Mauritshuis, La Haya": "Mauritshuis, The Hague",
  "Conocida como \"Mona Lisa del Norte\".": "Known as the \"Mona Lisa of the North\".",

  "LA LIBERTAD GUIANDO AL PUEBLO": "LIBERTY LEADING THE PEOPLE",
  "Eugène Delacroix": "Eugène Delacroix",
  "Símbolo de la revolución francesa.": "Symbol of the French Revolution.",

  "GUERNICA": "GUERNICA",
  "Pablo Picasso": "Pablo Picasso",
  "Museo Reina Sofía, Madrid.": "Reina Sofía Museum, Madrid.",
  "Denuncia la violencia y el horror de la guerra.": "Denounces the violence and horror of war.",

  "EL NACIMIENTO DE VENUS": "THE BIRTH OF VENUS",
  "Sandro Botticelli": "Sandro Botticelli",
  "Galería Uffizi, Florencia.": "Uffizi Gallery, Florence.",
  "Representa el mito del nacimiento de Venus.": "Depicts the myth of the birth of Venus.",

  "LA ÚLTIMA CENA": "THE LAST SUPPER",
  "Convento Santa Maria delle Grazie, Milán.": "Santa Maria delle Grazie Convent, Milan.",
  "Una de las escenas más famosas de la Biblia.": "One of the most famous scenes in the Bible.",

  "LAS MENINAS": "LAS MENINAS",
  "Diego Velázquez": "Diego Velázquez",
  "Museo del Prado, Madrid.": "Prado Museum, Madrid.",
  "Juega con la perspectiva y el punto de vista del espectador.": "Plays with perspective and viewer's point of view.",

  "EL BESO": "THE KISS",
  "Gustav Klimt": "Gustav Klimt",
  "Belvedere, Viena.": "Belvedere, Vienna.",
  "Un icono del modernismo que celebra el amor.": "An icon of modernism celebrating love.",

  "EL JARDÍN DE LAS DELICIAS": "THE GARDEN OF EARTHLY DELIGHTS",
  "El Bosco": "Hieronymus Bosch",
  "Tríptico que muestra paraíso, pecado y condena.": "Triptych showing paradise, sin and damnation.",

  "VENUS DE URBINO": "VENUS OF URBINO",
  "Tiziano": "Titian",
  "Sensualidad y belleza del Renacimiento.": "Sensuality and beauty of the Renaissance.",

  "EL ALMUERZO DE LOS REMEROS": "LUNCHEON OF THE BOATING PARTY",
  "Pierre-Auguste Renoir": "Pierre-Auguste Renoir",
  "Colección Phillips, Washington.": "Phillips Collection, Washington.",
  "Celebración de la amistad y el ocio parisino.": "Celebration of friendship and Parisian leisure."
};

function traducirPagina() {
  const elementos = document.querySelectorAll("h1, h2, h3, p, a, button, li");

  elementos.forEach(el => {
    const texto = el.innerText.trim();
    if (idiomaActual === 'es' && traducciones[texto]) {
      el.innerText = traducciones[texto];
    } else if (idiomaActual === 'en') {
      const entradaOriginal = Object.entries(traducciones)
        .find(([key, value]) => value === texto);
      if (entradaOriginal) {
        el.innerText = entradaOriginal[0];
      }
    }
  });

  idiomaActual = idiomaActual === 'es' ? 'en' : 'es';
}

document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById("translate-btn");
  if (btn) {
    btn.addEventListener("click", traducirPagina);
  }
});
