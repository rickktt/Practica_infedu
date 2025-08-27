
let idiomaActual = 'es';

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

    // Sección Acerca de Nosotros
    "ACERCA DE NOSOTROS": "ABOUT US",
    "NAD (Nice Art of Dreams) es una galería digital de arte creada para acercar el arte visual a todos, sin importar la experiencia previa. Queremos que el arte sea vivido, sentido y soñado.":
        "NAD (Nice Art of Dreams) is a digital art gallery created to bring visual art closer to everyone, regardless of prior experience. We want art to be lived, felt, and dreamed.",
    "Aquí descubrirás pinturas, esculturas, ilustraciones, fotografía, arte digital y más. Cada obra es seleccionada cuidadosamente para ofrecer una experiencia única y envolvente.":
        "Here you will discover paintings, sculptures, illustrations, photography, digital art and more. Each work is carefully selected to offer a unique and immersive experience.",
    "Contamos con una colección especial de obras destacadas que invitan a reflexionar, inspirarse y emocionarse, mostrando nuevas formas de ver el mundo.":
        "We have a special collection of outstanding works that invite reflection, inspiration, and emotion, showing new ways to see the world.",
    "Nuestra misión es que el arte sea parte de tu día a día, no solo como algo que se observa, sino como algo que se vive intensamente. Porque en NAD, creemos que el arte transforma.":
        "Our mission is for art to be part of your daily life, not just something to observe, but something to live intensely. Because at NAD, we believe art transforms.",
    "Únete a nuestra comunidad, explora nuevas tendencias y redescubre la belleza desde una perspectiva diferente.":
        "Join our community, explore new trends, and rediscover beauty from a different perspective.",

    // Footer
    "Opciones": "Options",
    "Aviso Legal": "Legal Notice",
    "Política de Privacidad": "Privacy Policy",
    "Términos de Servicio": "Terms of Service",
    "Contáctanos": "Contact Us"
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
