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
  <title>Artes Visuales</title>
  <link rel="stylesheet" href="../CSS/artesGraficas.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body class="background">

  <?php
  include("../HTMLEN/navbar.php");
  ?>
  <button class="theme-toggle-left" onclick="window.location.href='../HTML/artesGraficas.php'">
    <img src="../MEDIA/IMG/españa.png" alt="estados unidos">
    <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
      <span class="theme-icon sun-icon">☀️</span>
      <span class="theme-icon moon-icon">🌙</span>
    </button>
    <section class="section2">
      <h1>Graphic Arts</h1>
      <hr>

      <main>
        <div class="texto">
          <p>Graphic Arts are a set of techniques and processes used to create and produce images and visual elements,
            primarily for mass reproduction, such as in printing.</p> <br>

          <!-- Hidden content -->
          <div class="extra" id="contenidoExtra">
            <p>They include techniques such as engraving, lithography, screen printing, graphic design, and digital
              printing, with the aim of visually communicating messages.</p><br>
            <p>Graphic arts are used to create images and texts that can be used both in printing and digital media for
              communication and advertising. This includes a wide range of techniques and processes, from traditional
              techniques like engraving and drawing to modern methods related to printing presses and digital tools.</p>
            <br>
            <p>They are used to create designs, logos, posters, packaging, containers, labels, clothing, and much more.
            </p>
          </div>

          <!-- "See more" button -->
          <button class="ver-mas-btn" onclick="mostrarContenido()">See More</button>
        </div>

        <div class="caja-lateral">
          <img src="../MEDIA/IMG/graficas.jpg">
          <p>Graphic arts stand out for their versatility and ability to communicate messages visually, being
            fundamental in advertising, graphic design, and artistic expression.</p>
      </main>
      <script src="../JAVASCRIPT/vermas.js"></script>
    </section>

    <section class="section">
      <h1>More about Graphic Arts</h1>
      <hr>
      <div class="img-container">
        <img src="../MEDIA/IMG/graficas2.jpg">
      </div>

      <div class="text-container">
        <p>This term began to be used after the invention of the printing press. Thus, it grouped together all the
          professions related to typography printing, such as printing, bookbinding, etc.</p>
        <p>Today, digital printing can also be included under this term due to the significant technological development
          that has taken place over the past few years.</p>
        <p>Graphic Arts are used as a means of advertising dissemination, applying various techniques in signage,
          posters, packaging, boxes, containers, labels, websites, etc.</p>
      </div>
    </section>

    <section class="estetica-section">
      <div class="columna-izquierda">
        <h2>Drawing</h2>
        <ul>
          <li>It allows the representation of objects, concepts, and emotions, using lines, shapes, and shadows. Drawing
            can be done freehand, digitally, or using other techniques.</li>
        </ul>
        <img src="../MEDIA/IMG/dibujo.jpg" width="250" alt="Contemporary art">
      </div>

      <div class="columna-derecha">
        <h2>Types of Graphic Arts</h2>
        <ul>
          <li>Drawing is an essential tool for creating designs and visual communication. In graphic arts, drawing is
            used to:</li><br>
          <li><b>1:</b>Create sketches and designs: Drawing is used as a preliminary step to creating final works.</li>
          <br>
          <li><b>2:</b>Create illustrations: Drawings that complement texts in books, magazines, and other materials.
          </li><br>
          <li><b>3:</b>Design logos and graphics: Creating visual elements for brands and companies.</li><br>
          <li><b>4:</b>Create digital illustrations: Using software to create digital images.</li>
        </ul>
      </div>
    </section>

    <section class="seccion-arte">
      <div class="texto-izquierda">
        <h2>Illustration</h2>
        <p>Illustration is a specific form of graphic art that involves creating images (drawings, paintings,
          engravings, etc.) to complement, narrate, or illustrate a text, message, or concept.</p>
        <p>Its main goal is visual communication, whether to clarify a text, create an atmosphere, or express an idea.
        </p>
        <p><b>Techniques:</b> It can use various techniques, including hand drawing, painting, engraving, digital
          printing, and mixed techniques.</p>
        <p><b>Applications:</b> It is used in a wide variety of contexts, such as children's books, magazines,
          advertising, web design, video games, scientific illustration, and much more.</p>
      </div>
      <div class="imagen-central">
        <img src="../MEDIA/IMG/ilustracionn.jpg" alt="What contemporary arts are used for">
        <p>Illustration can be part of a broader graphic project, such as creating an illustrated book, advertising a
          product, or designing a website.</p>
      </div>
    </section>

    <!----CLASSIFICATION of visual arts---->
    <section class="titulo">
      <h1>Classification of Visual Arts</h1>
      <hr>
      <div class="tarjetas">
        <div class="tarjeta">
          <img src="../MEDIA/IMG/manga.comic.webp" alt="Representation of Plastic Arts">
          <h2>Plastic Arts</h2>
          <h1>Manga/Comic</h1>
          <p><b>Manga</b> is a term that refers to comics and graphic novels produced in Japan, characterized by their
            unique artistic style and right-to-left reading. </p>
          <p>Manga has also been adapted into other media, such as anime and film, expanding its reach and influence in
            popular culture.</p>
          <p><b>Comic</b> is a form of graphic art that uses images and text to tell stories. It is a form of visual
            narrative that combines art with literature, creating a unique experience for the reader.</p>
          <a href="../HTML/artesPlasticas.php" class="boton-vermas">See More</a>
        </div>
        <div class="tarjeta">
          <img src="../MEDIA/IMG/afiche.cartel.webp" alt="Representation of Popular Arts">
          <h1>Posters/Flyers</h1>
          <p><b>Posters</b> are a fundamental form of graphic arts, used to communicate messages in a visually appealing
            and impactful way. </p>
          <p>They are designed to be striking and persuasive, aiming to capture the audience's attention and convey an
            idea or message clearly and concisely. </p>
          <p><b>Flyers</b> are visual pieces used to communicate information or promote something effectively. </p>
          <p>They combine images and text to capture the audience's attention and transmit a specific message.</p>
          <a href="../HTML/artesPopulares.php" class="boton-vermas">See More</a>
        </div>
        <div class="tarjeta">
          <img src="../MEDIA/IMG/caligrafia.jpg" alt="Representation of Contemporary Art">
          <h1>Calligraphy/Lettering</h1>
          <p><b>Calligraphy</b> is the art of writing letters artistically, using tools like pens or brushes to create
            fluid and rhythmic strokes.
            In graphic arts: It is used to create decorative letters in designs like logos, signage, or titles, aiming
            for visual impact and message expression. </p>
          <p><b>Example</b> It can be used to create logos, magazine or newspaper titles, shop signs, or even in the
            creation of visual art pieces. </p>
          <a href="../HTML/arteContemporaneo" class="boton-vermas">See More</a>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div class="footer-left">
        <img src="../MEDIA/IMG/LOGONAD.png">
        <div>
          <b>NAD</b><br>
          Nice Art of Dreams<br>
          © 2025 Nice Art of Dreams
          <div class="social-icons">
            <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
              <img class="icon" src="../MEDIA/IMG/instagram.png" alt="Instagram Logo">
            </a>
            <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
              <img class="icon" src="../MEDIA/IMG/facebook.png" alt="Facebook Logo">
            </a>
            <a href="https://www.twitter.com" target="_blank" aria-label="Twitter">
              <img class="icon" src="../MEDIA/IMG/x.png" alt="Twitter Logo">
            </a>
          </div>
        </div>
      </div>
      <div class="footer-column">
        <h4>Options</h4>
        <p>Visual Arts</p>
        <p>Fine Arts</p>
        <p>Graphic Arts</p>
        <p>Popular Arts</p>
        <p>Contemporary Art</p>
      </div>
      <div class="footer-column">
        <h4>Legal Notice</h4>
        <p>Privacy Policy</p>
        <p>Terms of Service</p>
        <p>Contact Us</p>
      </div>
    </footer>
</body>

</html>