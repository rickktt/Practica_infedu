const frases = [
    
        {
          texto: "The aim of art is not to represent the outward appearance of things, but their inner meaning.",
          autor: "Aristotle",
          imagen: "../MEDIA/IMG/ARISTOTELES.jpg",
        },
        {
          texto: "The world is full of small joys: art lies in knowing how to recognize them.",
          autor: "Li Tai-Po",
          imagen: "../MEDIA/IMG/li tai-po.jpg",
        },
        {
          texto: "Sometimes you have to slightly mess up the painting to be able to finish it.",
          autor: "Eugène Delacroix",
          imagen: "../MEDIA/IMG/delacroix.jpg",
        },
        {
          texto: "Anyone who cultivates fantasy in art is a bit mad. Their challenge is to make that madness interesting.",
          autor: "François Truffaut",
          imagen: "../MEDIA/IMG/truffaut.jpg",
        },
        {
          texto: "Nothing is more harmful to creativity than the frenzy of inspiration.",
          autor: "Umberto Eco",
          imagen: "../MEDIA/IMG/umberto.jpg",
        },
        {
          texto: "The first merit of a painting is to be a feast for the eyes.",
          autor: "Eugène Delacroix",
          imagen: "../MEDIA/IMG/delacroix.jpg",
        },
        {
          texto: "Art is not something you can take or leave. It's necessary for life.",
          autor: "Oscar Wilde",
          imagen: "../MEDIA/IMG/wilde.jpg",
        },
        {
          texto: "Works of art are always born from those who have faced danger, who have gone to the edge of experience, to the point that no human can surpass. The more you see, the more your life becomes your own—more personal, more unique.",
          autor: "Rainer Maria Rilke",
          imagen: "../MEDIA/IMG/rainer.jpeg",
        },
        {
          texto: "The purpose of art is to give body to the secret essence of things, not to copy their appearance.",
          autor: "Aristotle",
          imagen: "../MEDIA/IMG/ARISTOTELES.jpg",
        },
        {
          texto: "Inspiration exists, but it has to find you working.",
          autor: "Pablo Picasso",
          imagen: "../MEDIA/IMG/picasso.jpg",
        },
        {
          texto: "No great artist ever sees things as they really are. If they did, they would cease to be an artist.",
          autor: "Oscar Wilde",
          imagen: "../MEDIA/IMG/wilde.jpg",
        },
        {
          texto: "In art, as in love, tenderness is what gives strength.",
          autor: "Oscar Wilde",
          imagen: "../MEDIA/IMG/wilde.jpg",
        },
        {
          texto: "A painter is a man who paints what he sells. An artist, on the other hand, is a man who sells what he paints.",
          autor: "Pablo Picasso",
          imagen: "../MEDIA/IMG/picasso.jpg",
        },
        {
          texto: "Painting is silent poetry; poetry is blind painting.",
          autor: "Leonardo da Vinci",
          imagen: "../MEDIA/IMG/vinci.jpg",
        },
        {
          texto: "Architecture is frozen music.",
          autor: "Arthur Schopenhauer",
          imagen: "../MEDIA/IMG/arthur.jpg",
        },
        {
          texto: "The art of conducting consists in knowing when to stop waving the baton so as not to disturb the orchestra.",
          autor: "Herbert Von Karajan",
          imagen: "../MEDIA/IMG/herberth.jpg",
        },
        {
          texto: "Art is not what you see, but what you make others see.",
          autor: "Edgar Degas",
          imagen: "../MEDIA/IMG/degas.jpg",
        },
        {
          texto: "A work of art is the unique result of a unique temperament.",
          autor: "Oscar Wilde",
          imagen: "../MEDIA/IMG/wilde.jpg",
        },
        {
          texto: "Art is a lie that brings us closer to the truth.",
          autor: "Pablo Picasso",
          imagen: "../MEDIA/IMG/picasso.jpg",
        },
        {
          texto: "The artist's duty is to make the invisible visible.",
          autor: "Juan Fabuel",
          imagen: "../MEDIA/IMG/fabuel.jpg",
        },
        {
          texto: "Art is to comfort those who are broken by life.",
          autor: "Vincent Van Gogh",
          imagen: "../MEDIA/IMG/VicentVanGohg.jpg",
        },
        {
          texto: "Art is not a mirror to reflect reality, but a hammer to shape it.",
          autor: "Bertolt Brecht",
          imagen: "../MEDIA/IMG/bertolt.jpg",
        },
        {
          texto: "Love the art within you, not yourself in art.",
          autor: "Konstantin Stanislavski",
          imagen: "../MEDIA/IMG/konstantin.jpg",
        },
        {
          texto: "Art is the expression of the deepest thoughts in the simplest way.",
          autor: "Albert Einstein",
          imagen: "../MEDIA/IMG/einstein.jpg",
        },
        {
          texto: "There are no rules in art, because art is free.",
          autor: "Wassily Kandinsky",
          imagen: "../MEDIA/IMG/wassilly.jpg",
        }
];
      


const fraseSeleccionada = frases[Math.floor(Math.random() * frases.length)];

document.getElementById("fraseImagen").src = fraseSeleccionada.imagen;
document.getElementById("fraseTexto").textContent = `«${fraseSeleccionada.texto}»`;
document.getElementById("fraseAutor").textContent = `| ${fraseSeleccionada.autor} |`;