const frases = [
    {
    texto: "El objetivo del arte no es representar la apariencia externa de las cosas, sino su significado interior. ",
    autor: "Aristoteles",
    imagen: "../MEDIA/IMG/ARISTOTELES.jpg",
    },
    {
    texto: "El mundo está lleno de pequeñas alegrías: el arte consiste en saber distinguirlas.",
    autor: "Li Tai-Po",
    imagen: "../MEDIA/IMG/li tai-po.jpg",
    },
    {
    texto: "A veces hay que estropear un poquito el cuadro para poder terminarlo.",
    autor: "Eugène Delacroix",
    imagen: "../MEDIA/IMG/delacroix.jpg",
    },
    {
    texto: "Quienquiera que cultive la fantasía en el arte está un poco loco. Su problema estriba en hacer interesante esa locura.",
    autor: "François Truffaut",
    imagen: "../MEDIA/IMG/truffaut.jpg",
    },
    {
    texto: "Nada es más nocivo para la creatividad que el furor de la inspiración.",
    autor: "Umberto Eco",
    imagen: "../MEDIA/IMG/umberto.jpg",
    },
    {
    texto: "El primer mérito de un cuadro es ser una fiesta para la vista.",
    autor: "Eugène Delacroix",
    imagen: "../MEDIA/IMG/delacroix.jpg",
    },
    {
    texto: "El arte no es algo que se pueda tomar y dejar. Es necesario para vivir.",
    autor: "Oscar Wilde",
    imagen: "../MEDIA/IMG/wilde.jpg",
    },
    {
    texto: "Las obras de arte nacen siempre de quien ha afrontado el peligro, de quien ha ido hasta el extremo de la experiencia, hasta el punto que ningún humano puede rebasar. Cuanto más se ve, más propia, más personal, más única se hace una vida.",
    autor: "Rainer María Rilke",
    imagen: "../MEDIA/IMG/rainer.jpeg",
    },
    {
    texto: "La finalidad del arte es dar cuerpo a la esencia secreta de las cosas, no el copiar su apariencia.",
    autor: "Aristóteles",
    imagen: "../MEDIA/IMG/ARISTOTELES.jpg",
    },
    {
    texto: "La inspiración existe, pero tiene que encontrarte trabajando.",
    autor: "Pablo Picasso",
    imagen: "../MEDIA/IMG/picasso.jpg",
    },
    {
    texto: "Ningún gran artista ve las cosas como son en realidad; si lo hiciera, dejaría de ser artista.",
    autor: "Oscar Wilde",
    imagen: "../MEDIA/IMG/wilde.jpg",
    },
    {
    texto: "En el arte como en el amor la ternura es lo que da la fuerza.",
    autor: "Oscar Wilde",
    imagen: "../MEDIA/IMG/wilde.jpg",
    },
    {
    texto: "Un pintor es un hombre que pinta lo que vende. Un artista, en cambio, es un hombre que vende lo que pinta.",
    autor: "Pablo Picasso",
    imagen: "../MEDIA/IMG/picasso.jpg",
    },
    {
    texto: "La pintura es poesía muda; la poesía pintura ciega.",
    autor: "Leonardo Da Vinci",
    imagen: "../MEDIA/IMG/vinci.jpg",
    },
    {
    texto: "La arquitectura es una música congelada.",
    autor: "Arthur Schopenhauer",
    imagen: "../MEDIA/IMG/arthur.jpg",
    },
    {
    texto: "El arte de dirigir consiste en saber cuándo hay que abandonar la batuta para no molestar a la orquesta.",
    autor: "Herbert Von Karajan",
    imagen: "../MEDIA/IMG/herberth.jpg",
    },
    {
    texto: "El arte no es lo que ves, sino lo que haces ver a los demás.",
    autor: "Edgar Degas",
    imagen: "../MEDIA/IMG/degas.jpg",
    },
    {
    texto: "Una obra de arte es el resultado único de un temperamento único.",
    autor: "Oscar Wilde",
    imagen: "../MEDIA/IMG/wilde.jpg",
    },
    {
    texto: "El arte es una mentira que nos acerca a la verdad.",
    autor: "Pablo Picasso",
    imagen: "../MEDIA/IMG/picasso.jpg",
    },
    {
    texto: "El deber de un artista es convertir en visible lo invisible.",
    autor: "Juan Fabuel",
    imagen: "../MEDIA/IMG/fabuel.jpg",
    },
    {
    texto: "El arte es para consolar a los que están quebrantados por la vida.",
    autor: "Vincent Van Gogh",
    imagen: "../MEDIA/IMG/VicentVanGohg.jpg",
    },
    {
    texto: "El arte no es un espejo para reflejar la realidad, sino un martillo para darle forma.",
    autor: "Bertolt Brecht",
    imagen: "../MEDIA/IMG/bertolt.jpg",
    },
    {
    texto: "Ama el arte que tienes dentro, no a ti haciendo arte.",
    autor: "Konstantin Stanislavski",
    imagen: "../MEDIA/IMG/konstantin.jpg",
    },
    {
    texto: "El arte es la expresión de los más profundos pensamientos por el camino más sencillo.",
    autor: "Albert Einstein",
    imagen: "../MEDIA/IMG/einstein.jpg",
    },
    {
    texto: "No hay normas en el arte, pues el arte es libre.",
    autor: "Wassily Kandinsky",
    imagen: "../MEDIA/IMG/wassilly.jpg",
    }
];

const fraseSeleccionada = frases[Math.floor(Math.random() * frases.length)];

document.getElementById("fraseImagen").src = fraseSeleccionada.imagen;
document.getElementById("fraseTexto").textContent = `«${fraseSeleccionada.texto}»`;
document.getElementById("fraseAutor").textContent = `| ${fraseSeleccionada.autor} |`;