
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

    // Títulos principales
    "Artes Visuales": "Visual Arts",
    "Elementos clave de las Artes Visuales": "Key Elements of Visual Arts",
    "Criterios Estéticos": "Aesthetic Criteria",
    "Ideas básicas que definen el Arte visual": "Basic Ideas that Define Visual Art",
    "Las artes visuales son importante porque:": "Visual Arts are Important Because:",
    "¿Para qué siven las artes visuales": "What are Visual Arts For?",
    "Clasificación de las Artes Visuales": "Classification of Visual Arts",
    "Artes Plásticas": "Plastic Arts",
    "Artes Populares": "Folk Arts",
    "Artes Gráficas": "Graphic Arts",
    "Arte Contemporáneo": "Contemporary Art",
    "Opciones": "Options",
    "Aviso Legal": "Legal Notice",
    "Política de Privacidad": "Privacy Policy",
    "Términos de Servicio": "Terms of Service",
    "Contáctanos": "Contact Us",

    // Párrafos y textos largos
    "Los seres humanos somos personas expresivas por naturaleza, ya que nos gusta compartirle al mundo la percepción que tenemos de las cosas; las artes visuales contribuyen a esta labor. Es gracias a las artes visuales que hoy en día nos encontramos sumergidos en un mundo lleno de expresiones artísticas.":
    "Human beings are expressive by nature, as we like to share with the world our perception of things; visual arts contribute to this task. Thanks to visual arts, we are today immersed in a world full of artistic expressions.",

    "Las artes visuales son una manifestación artística, expresiva, de percepción visual en la cual el individuo crea y recrea mundos naturales o fantásticos mediante elementos materiales utilizando diversas técnicas que le permiten expresar sus sentimientos, emociones y percepciones del mundo que lo rodea.":
    "Visual arts are an artistic and expressive manifestation of visual perception in which the individual creates and recreates natural or fantastic worlds through material elements using various techniques that allow them to express feelings, emotions, and perceptions of the surrounding world.",

    "El concepto Artes Visuales se gesta a fines de la Segunda Guerra Mundial, cuando los artistas europeos que habían emigrado a New York asientan una producción artística que se relaciona con la libertad expresiva y formal propiciada por las vanguardias de fines del Siglo XIX, a lo que se sumó el crucial empuje que significaron las propuestas de Marcel Duchamp.":
    "The concept of Visual Arts was born at the end of World War II, when European artists who had emigrated to New York established an artistic production related to expressive and formal freedom fostered by the avant-garde movements of the late 19th century, along with the crucial influence of Marcel Duchamp's proposals.",

    "Es alrededor de 1980 cuando el término “Artes Visuales” empieza a predominar en el vocabulario pues es más adecuado para el arte contemporáneo que la denominación Artes Plásticas.":
    "Around 1980, the term 'Visual Arts' began to dominate vocabulary as it was more suitable for contemporary art than the term Plastic Arts.",

    "A partir de estos códigos o lenguajes que el artista busca transmitir al espectador una experiencia estética determinada.":
    "From these codes or languages, the artist seeks to convey a specific aesthetic experience to the viewer.",

    "Apropiación: Por parte del artista, de una cantidad ilimitada de recursos así como de estilos, incluso de siglos pasados.":
    "Appropriation: By the artist, of an unlimited amount of resources as well as styles, even from past centuries.",

    "Circulación y Experimentación: Se presenta a través de diferentes soportes y materias.":
    "Circulation and Experimentation: Presented through different media and materials.",

    "Pluralismo y Globalización:tiene que ver con la fluida comunicación entre artistas de distintos países y continentes":
    "Pluralism and Globalization: Related to the fluid communication among artists from different countries and continents.",

    "Estrategias Expositivas:Tanto los artistas como los curadores buscan nuevas estrategias expositivas acordes a la naturaleza de las obras.":
    "Exhibition Strategies: Both artists and curators seek new exhibition strategies suited to the nature of the works.",

    "Permiten la expresión creativa y la comunicación de ideas y emociones.":
    "They allow creative expression and communication of ideas and emotions.",

    "Ayudan a comprender la cultura y la historia de diferentes sociedades.":
    "They help to understand the culture and history of different societies.",

    "Tienen un impacto en la sociedad y pueden influir en la forma en que las personas perciben el mundo.":
    "They have an impact on society and can influence how people perceive the world.",

    "Son una herramienta para la educación y el desarrollo personal. ":
    "They are a tool for education and personal development.",

    "Sirven o cumplen con una misión estética, ideológica, conmemorativa, pedagógica y como un mecanismo para expandir la realidad. También son elementales para dar sensibilidad al espectador, para transformar espacios y funcionan como un excelente vehículo para la expresión.":
    "They serve or fulfill an aesthetic, ideological, commemorative, pedagogical mission and act as a mechanism to expand reality. They are also essential for giving sensitivity to the viewer, transforming spaces, and function as an excellent vehicle for expression."
};

function traducirPagina() {
    const elementos = document.querySelectorAll("h1, h2, h3, p, a, button, li, div");

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

document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("translate-btn");
    if (btn) {
        btn.addEventListener("click", traducirPagina);
    }
});
