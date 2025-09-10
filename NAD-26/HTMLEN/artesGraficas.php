<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Graphic Arts</title>
  <link rel="stylesheet" href="../CSS/artesGraficas.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/DarkMode.css">
  <link rel="stylesheet" href="../CSS/nav.css">
</head>

<body class="background">

  <?php
  include("../HTMLEN/nav1.php");
  ?>

  <button class="theme-toggle-left" onclick="window.location.href='../HTML/artesGraficas.php'">
    <img src="../MEDIA/IMG/españa.png" alt="spain flag">
  </button>
  <button class="theme-toggle" id="themeToggle" aria-label="Change light/dark mode">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
  </button>

  <!-- Intro -->
  <section class="section2">
    <h1>Graphic Arts</h1>
    <hr>
     <div>
            <img class="lam" src="../MEDIA/IMG/lamparaI.png" alt="">
        </div>
        <div>
            <img class="lam2" src="../MEDIA/IMG/lamparaD.png" alt="">
        </div>
    <main>
      <div class="texto">
        <p>Graphic Arts are a set of techniques and processes used to create and produce images and visual elements,
          primarily for mass reproduction, such as in printing.</p><br>

        <div class="extra" id="contenidoExtra">
          <p>They include techniques such as engraving, lithography, screen printing, graphic design, and digital
            printing, with the aim of visually communicating messages.</p><br>
          <p>Graphic arts are used to create images and texts that can be used both in printing and digital media for
            communication and advertising. This includes a wide range of techniques and processes, from traditional
            techniques like engraving and drawing to modern methods related to printing presses and digital tools.</p><br>
          <p>They are used to create designs, logos, posters, packaging, containers, labels, clothing, and much more.</p>
        </div>

        <button class="ver-mas-btn" onclick="mostrarContenido()">See more</button>
      </div>

      <div class="caja-lateral">
        <img src="../MEDIA/IMG/graficas.jpg" alt="Graphic Arts">
        <p>Graphic arts stand out for their versatility and ability to communicate messages visually, being fundamental
          in advertising, graphic design, and artistic expression.</p>
      </div>
    </main>
    <script src="../JAVASCRIPTEN/vermas.js"></script>
  </section>

  <!-- More about Graphic Arts -->
  <section class="section">
    <h1>More about Graphic Arts</h1>
    <main>
      <div class="img-container">
        <img src="../MEDIA/IMG/graficas2.jpg" alt="Graphic Arts">
      </div>
      <div class="text-container">
        <p>This term began to be used after the invention of the printing press. Thus, it grouped together all the
          professions related to typography printing, such as printing, bookbinding, etc.</p>
        <p>Today, digital printing can also be included under this term due to the significant technological development
          that has taken place over the past few years.</p>
        <p>Graphic Arts are used as a means of advertising dissemination, applying various techniques in signage,
          posters, packaging, boxes, containers, labels, websites, etc.</p>
      </div>
    </main>
  </section>

  <!-- Drawing -->
  <section class="clasificacion-artes">
    <div class="columna-izquierda">
      <h2>Drawing</h2>
      <ul>
        <li>It allows the representation of objects, concepts, and emotions, using lines, shapes, and shadows. Drawing
          can be done freehand, digitally, or using other techniques.</li>
      </ul>
      <img src="../MEDIA/IMG/dibujo.jpg" width="250" alt="Drawing">
    </div>

    <div class="columna-derecha">
      <h2>Types of Graphic Arts</h2>
      <ul>
        <li>Drawing is an essential tool for creating designs and visual communication. In graphic arts, drawing is
          used to:</li><br>
        <li><b>1:</b> Create sketches and designs: Drawing is used as a preliminary step to creating final works.</li><br>
        <li><b>2:</b> Create illustrations: Drawings that complement texts in books, magazines, and other materials.</li><br>
        <li><b>3:</b> Design logos and graphics: Creating visual elements for brands and companies.</li><br>
        <li><b>4:</b> Create digital illustrations: Using software to create digital images.</li>
      </ul>
    </div>
  </section>

  <!-- Illustration -->
  <section class="section">
    <h1>Illustration</h1>
    <main>
      <div class="text-container">
        <p>Illustration is a specific form of graphic art that involves creating images (drawings, paintings,
          engravings, etc.) to complement, narrate, or illustrate a text, message, or concept.</p>
        <p>Its main goal is visual communication, whether to clarify a text, create an atmosphere, or express an idea.</p>
        <p><strong>Techniques:</strong> It can use various techniques, including hand drawing, painting, engraving,
          digital printing, and mixed techniques.</p>
        <p><strong>Applications:</strong> It is used in a wide variety of contexts, such as children's books, magazines,
          advertising, web design, video games, scientific illustration, and much more.</p>
        <p>Illustration can be part of a broader graphic project, such as creating an illustrated book, advertising a
          product, or designing a website.</p>
      </div>
      <div class="img-container">
        <img src="../MEDIA/IMG/ilustracionn.jpg" alt="Illustration">
      </div>
    </main>
  </section>

  <!-- Classification -->
  <section class="clasificacion-artes">
    <div class="contenedor-clasificacion">

      <div class="carrusel-container">
        <button class="carrusel-btn izquierda">&#10094;</button>
        <div class="carrusel">

          <div class="tarjeta">
            <img src="../MEDIA/IMG/manga.comic.webp" alt="Manga and Comic">
            <h2>Manga / Comic</h2>
            <p><b>Manga</b> refers to comics and graphic novels produced in Japan, characterized by their unique artistic
              style and right-to-left reading.</p>
            <p>Manga has also been adapted into other media, such as anime and film, expanding its reach and influence
              in popular culture.</p>
            <p><b>Comic</b> is a form of graphic art that uses images and text to tell stories. It is a form of visual
              narrative that combines art with literature, creating a unique experience for the reader.</p>
            <a href="../HTMLEN/artesPlasticas.php" class="boton-vermas">See more</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/afiche.cartel.webp" alt="Posters and Flyers">
            <h2>Posters / Flyers</h2>
            <p><b>Posters</b> are a fundamental form of graphic arts, used to communicate messages in a visually appealing
              and impactful way.</p>
            <p>They are designed to be striking and persuasive, aiming to capture the audience's attention and convey an
              idea or message clearly and concisely.</p>
            <p><b>Flyers</b> are visual pieces used to communicate information or promote something effectively.</p>
            <p>They combine images and text to capture the audience's attention and transmit a specific message.</p>
            <a href="../HTMLEN/artesPopulares.php" class="boton-vermas">See more</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/caligrafia.jpg" alt="Calligraphy and Lettering">
            <h2>Calligraphy / Lettering</h2>
            <p><b>Calligraphy</b> is the art of writing letters artistically, using tools like pens or brushes to create
              fluid and rhythmic strokes. In graphic arts: it is used to create decorative letters in designs like logos,
              signage, or titles, aiming for visual impact and message expression.</p>
            <p><b>Example:</b> It can be used to create logos, magazine or newspaper titles, shop signs, or even in the
              creation of visual art pieces.</p>
            <a href="../HTMLEN/arteContemporaneo.php" class="boton-vermas">See more</a>
          </div>

        </div>
        <button class="carrusel-btn derecha">&#10095;</button>
      </div>

      <div class="textoClas">
        <h1>Classification of</h1>
        <h1>Visual Arts</h1>
        <hr>
        <p>Visual arts are an artistic, expressive manifestation of visual perception in which the individual creates and
          recreates natural or fantastic worlds through material elements, using various techniques that allow them to
          express feelings, emotions, and perceptions of the surrounding world.</p>
      </div>
    </div>
    <script src="../JAVASCRIPTEN/carrusel-index.js"></script>
  </section>

  <?php
  include("../HTMLEN/footer.php");
  ?>
</body>

</html>
