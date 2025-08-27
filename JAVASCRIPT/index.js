
let idiomaActual = 'es'; // Idioma por defecto

const traducciones = {
    // HEADER y menú
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

    // Textos nuevos del index
    "¿QUÉ ES ARTE?": "WHAT IS ART?",
    "¿QUÉ NOS APORTA?": "WHAT DOES IT GIVE US?",
    "BIENVENID@S": "WELCOME",
    "ACERCA DE NAD": "ABOUT NAD",
    "En NAD encontrarás sobre:": "At NAD you will find about:",
    "**Frase Diaria**": "**Daily Quote**",
    "Explora un nuevo Arte": "Explore a New Art",
    "Galería de Arte": "Art Gallery",
    "Tip del día": "Tip of the Day",
    "¿QUÉ ES ARTE?": "WHAT IS ART?",
    "El arte es una de las formas más profundas y auténticas de expresión humana.":
    "Art is one of the deepest and most authentic forms of human expression.",

    "A través de colores, formas, imágenes, sonidos y movimientos, el arte nos permite comunicar emociones, ideas y pensamientos..":
    "Through colors, shapes, images, sounds, and movements, art allows us to communicate emotions, ideas, and thoughts.",

    "Más allá de lo estético, el arte sigue siendo de gran importancia para la cultura, la educación, la identidad y la transformación social.":
    "Beyond aesthetics, art remains of great importance for culture, education, identity, and social transformation.",


    // Sección: ¿Qué nos aporta?
    "¿QUE NOS APORTA?": "WHAT DOES IT GIVE US?",
    "Cada creación artística nos permite inventar, crear, mejorar, conocer y aprender nuevas formas de expresión y creatividad.":
    "Every artistic creation allows us to invent, create, improve, explore, and learn new ways of expression and creativity.",

    "**Lo mejor del arte es que no tiene límites. Siempre hay algo nuevo por descubrir, una emoción por sentir y un sueño por contruir**":
    "**The best thing about art is that it has no limits. There is always something new to discover, an emotion to feel, and a dream to build.**",


    // Sección: Bienvenid@s
    "BIENVENID@S A NAD": "WELCOME TO NAD",
    "Si has llegado hasta aquí, es porque el arte es una pieza clave para ti:":
    "If you’ve come this far, it’s because art is a key piece for you:",

    " - Una forma de expresar tus sentimientos, explorar tu creatividad, o simplemente un espacio de diversión y comunicación personal.":
    " - A way to express your feelings, explore your creativity, or simply a space for fun and personal communication.",

    "RECUERDA: El arte no tiene límites… cada sueño es una nueva creación por descubrir.":
    "REMEMBER: Art has no limits… every dream is a new creation to discover.",


    // Sección: Acerca de NAD
    "ACERCA DE NAD": "ABOUT NAD",
    "NAD (Nice Art of Dreams): un espacio donde podrás aprender, descubrir y compartir todo lo relacionado con las artes visuales:":
    "NAD (Nice Art of Dreams): a space where you can learn, discover, and share everything related to visual arts:",

    "🖼️ La Clasificación de las Artes Visuales.": "🖼️ The Classification of Visual Arts.",
    "🎨 Las Técnicas que puedes emplear en cada una.": "🎨 The Techniques you can use in each one.",
    "🖌️ Consejos, inspiración y mucho más.": "🖌️ Tips, inspiration, and much more.",

    // Párrafos nuevos
    "Las artes visuales pueden ser tanto tradicionales como contemporáneas, y abarcan una amplia gama de estilos, técnicas y enfoques creativos.":
    "Visual arts can be both traditional and contemporary, encompassing a wide range of styles, techniques, and creative approaches.",

    "La denominación “artes visuales” surge después de la II Guerra Mundial, con las corrientes vanguardistas del siglo XX, que entrelazan disciplinas tradicionales de las bellas artes.":
    "The term 'visual arts' emerged after World War II, with the avant-garde movements of the 20th century, intertwining traditional fine arts disciplines.",

    "¿No sabes con qué arte comenzar?": "Don’t know which art to start with?",
    "¿O cuál se adapta mejor a tu estilo, personalidad o interés?": "Or which one suits your style, personality, or interest best?",
    "🖌️¡No te preocupes!": "🖌️Don’t worry!",
    "Responde unas preguntas rápidas y déjate guiar hacia un nuevo tipo de arte.": "Answer a few quick questions and let yourself be guided to a new type of art.",
    "🎨 Haz click aqui y descubre un nuevo arte..": "🎨 Click here and discover a new art..",

    "A muchos nos pasa que empezamos a dibujar súper emocionados, y de una vamos directo a los detalles… pero luego te das cuenta de que los ojos quedaron chuecos, la nariz torcida o que un pie casi sale del papel.":
    "It happens to many of us: we start drawing super excited, jumping straight to details... but then realize the eyes are crooked, the nose twisted, or a foot almost goes off the paper.",

    "Por eso, lo mejor es empezar con lo más básico: \nUna estructura general.\nEn la cual comienzas con formas básicas en las que cuadren las proporciones y definas el espacio de tu papel o dibujo.Ya luego podras continuar con sombras y detalles. Te ahorra tiempo, frustraciones, estrés... ¡y papel!":
    "That’s why it’s best to start with the basics: \nA general structure.\nBegin with basic shapes that fit proportions and define the space of your paper or drawing. Later you can continue with shadows and details. It saves time, frustration, stress... and paper!",
// Footer
  "Opciones": "Options",
  "Artes Visuales": "Visual Arts",
  "Bellas Artes": "Fine Arts",
  "Artes Gráficas": "Graphic Arts",
  "Artes Populares": "Folk Arts",
  "Arte Contemporáneo":     "Contemporary Art",
  "Aviso Legal:": "Legal Notice",
  "Política de Privacidad": "Privacy Policy",
  "Términos de Servicio": "Terms of Service",
  "Contáctanos": "Contact Us",

};


// Función principal
function traducirPagina() {
    const elementos = document.querySelectorAll("h1, h2, h3, p, a, button, li, div");

    elementos.forEach(el => {
        const texto = el.innerText.trim();
        if (idiomaActual === 'es' && traducciones[texto]) {
            el.innerText = traducciones[texto];
        } else if (idiomaActual === 'en') {
            // Buscar la clave original del texto actual para revertir
            const entradaOriginal = Object.entries(traducciones)
                .find(([key, value]) => value === texto);
            if (entradaOriginal) {
                el.innerText = entradaOriginal[0];
            }
        }
    });

    idiomaActual = idiomaActual === 'es' ? 'en' : 'es';
}

// Escucha del botón
document.getElementById("translate-btn").addEventListener("click", traducirPagina);
