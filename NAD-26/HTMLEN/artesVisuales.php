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
  <link rel="stylesheet" href="../CSS/artesVisuales.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/DarkMode.css">
  <link rel="stylesheet" href="../CSS/nav.css">
</head>

<body class="background">

  <?php include("../HTMLEN/nav1.php"); ?>

  <!-- Botones de idioma y tema -->
  <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/artesVisuales.php'">
    <img src="../MEDIA/IMG/estados unidos.png" alt="English">
  </button>
  <button class="theme-toggle" id="themeToggle" aria-label="Toggle light/dark mode">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
  </button>

  <!-- Sección principal -->
  <section class="section2">
    <div>
      <img class="lam" src="../MEDIA/IMG/lamparaI.png" alt="">
    </div>
    <h1>Visual Arts</h1>
    <hr>
    <main>
      <div class="texto">
        <p>
          Humans are expressive by nature, as we love to share with the world our perception of things;
          visual arts contribute to this task. It is thanks to visual arts that today we find ourselves
          immersed in a world full of artistic expressions.
        </p>

        <!-- Hidden content -->
        <div class="extra" id="contenidoExtra">
          <p>
            Visual arts are an artistic, expressive manifestation of visual perception in which the
            individual creates and recreates natural or fantastic worlds using material elements and
            various techniques that allow them to express their feelings, emotions, and perceptions of
            the surrounding world.
          </p>
          <p>
            The concept of Visual Arts emerged at the end of World War II, when European artists who had
            emigrated to New York established an artistic production related to expressive and formal
            freedom, fostered by the avant-gardes of the late 19th century, to which was added the
            crucial push of Marcel Duchamp's proposals.
          </p>
        </div>

        <!-- "See more" button -->
        <button class="ver-mas-btn" onclick="mostrarContenido()">See more</button>
      </div>

      <div class="caja-lateral">
        <img src="../MEDIA/IMG/artesVisuales_1.jpg" alt="Visual art piece">
        <blockquote>
          <strong>It was around 1980 that the term “Visual Arts” began to predominate in the
            vocabulary, as it is more suitable for contemporary art than the term Plastic Arts.</strong>
        </blockquote>
      </div>
      <div>
        <img class="lam2" src="../MEDIA/IMG/lamparaD.png" alt="">
      </div>
      <script src="../JAVASCRIPT/vermas.js"></script>
    </main>
  </section>

  <!-- Key Elements -->
  <section class="section">
    <h1>Key Elements of Visual Arts</h1>
    <main>
      <div class="img-container">
        <img src="../MEDIA/IMG/artesVisuales_1.jpg" alt="Various art pieces" />
      </div>
      <div class="text-container">
        <p><strong>Visual Perception:</strong> Sight is the main sense through which the artwork is appreciated
          and understood.</p>
        <p><strong>Creative Expression:</strong> They allow artists to express their ideas, emotions, and
          perceptions of the world through the creation of images.</p>
        <p><strong>Diversity of Techniques:</strong> They include a wide range of techniques, from painting and
          sculpture to photography and digital art.</p>
        <p><strong>Interdisciplinarity:</strong> Visual arts often intersect with other artistic disciplines and
          with technology.</p>
        <blockquote>
          “Art does not reproduce the visible, it makes visible the invisible.” – Paul Klee
        </blockquote>
      </div>
    </main>
  </section>

  <!-- Ideas container -->
  <section class="contenedor-ideas">
    <h1>Basic Ideas that Define Visual Art</h1>
    <ul>
      <li><strong>Appropriation:</strong> By the artist, of an unlimited amount of resources as well as styles,
        even from past centuries.</li>
      <li><strong>Circulation and Experimentation:</strong> It is presented through different media and
        materials.</li>
      <li><strong>Pluralism and Globalization:</strong> It relates to the fluid communication between artists
        from different countries and continents.</li>
      <li><strong>Exhibition Strategies:</strong> Both artists and curators seek new exhibition strategies in
        line with the nature of the works.</li>
    </ul>
    <div>
      <img class="poste" src="../MEDIA/IMG/postes4.png" alt="">
      <img class="poste1" src="../MEDIA/IMG/postes4.png" alt="">
    </div>
  </section>

  <!-- Importance -->
  <section class="seccion-arte">
    <div class="texto-izquierda">
      <h2>Visual Arts are important because:</h2>
      <ul>
        <li>They allow creative expression and the communication of ideas and emotions.</li>
        <li>They help understand the culture and history of different societies.</li>
        <li>They have an impact on society and can influence how people perceive the world.</li>
        <li>They are a tool for education and personal development.</li>
      </ul>
    </div>
    <div class="imagen-central">
      <img src="../MEDIA/IMG/artesVisuales3.jpg" alt="Visual arts collage">
    </div>

    <div class="texto-derecha">
      <h2>What are Visual Arts for?</h2>
      <p>
        They serve or fulfill an aesthetic, ideological, commemorative, pedagogical mission and act as a
        mechanism to expand reality. They are also essential to sensitize the viewer, transform spaces, and
        function as an excellent vehicle for expression.
      </p>
    </div>
  </section>

  <!-- Aesthetic Section -->
  <section class="estetica-section">
    <div class="columna-izquierda">
      <h2>Aesthetic Criteria</h2>
      <p>Harmony, color, composition, space, balance, light, movement, perspective, rhythm, and texture.</p>
      <img src="../MEDIA/IMG/criterios" alt="Classic art piece" />
      <p>From these codes or languages, the artist seeks to convey a determined aesthetic experience to the
        viewer.</p>
    </div>

    <div class="columna-derecha">
      <h2>Basic Ideas that Define Visual Art</h2>
      <p><strong>Appropriation:</strong> By the artist, of an unlimited amount of resources as well as styles,
        even from past centuries.</p>
      <p><strong>Circulation and Experimentation:</strong> It is presented through different media and materials.</p>
      <p><strong>Pluralism and Globalization:</strong> It relates to the fluid communication between artists from
        different countries and continents.</p>
      <p><strong>Exhibition Strategies:</strong> Both artists and curators seek new exhibition strategies in line
        with the nature of the works.</p>
    </div>
  </section>

  <!-- Classification -->
  <section class="clasificacion-artes">
    <div class="contenedor-clasificacion">
      <div class="carrusel-container">
        <button class="carrusel-btn izquierda">&#10094;</button>
        <div class="carrusel">
          <div class="tarjeta">
            <img src="../MEDIA/IMG/ARTESPLASTICAS.jpg" alt="Plastic Arts">
            <h2>Plastic Arts</h2>
            <p>All arts that use moldable or manipulable materials in their creation process.</p>
            <p><em>Painting, Drawing, Sculpture...</em></p>
            <a href="../HTML/artesPlasticas.php" class="boton-vermas">See more</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/ARTESPOPULARES.jpeg" alt="Folk Arts">
            <h2>Folk Arts</h2>
            <p>All arts that use moldable or manipulable materials in their creation process.</p>
            <p><em>Painting, Drawing, Sculpture...</em></p>
            <a href="../HTML/artesPopulares.php" class="boton-vermas">See more</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/ARTESGRAFICas.jpg" alt="Graphic Arts">
            <h2>Graphic Arts</h2>
            <p>A set of techniques that generate visual elements from engravings, drawings, and computer
              methods.</p>
            <p><em>Illustration, Typography, and Lettering...</em></p>
            <a href="../HTML/artesGraficas.php" class="boton-vermas">See more</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/ARTECONTEMPORÁNEO.jpg" alt="Contemporary Art">
            <h2>Contemporary Art</h2>
            <p>Artistic manifestations that arise from the 20th century onwards.</p>
            <p><em>Digital Art, Conceptual Art, Urban Art...</em></p>
            <a href="../HTML/arteContemporaneo.php" class="boton-vermas">See more</a>
          </div>
        </div>
        <button class="carrusel-btn derecha">&#10095;</button>
      </div>

      <div class="textoClas">
        <h1>Classification of</h1>
        <h1>Visual Arts</h1>
        <hr>
        <p>Visual arts are an artistic, expressive manifestation of visual perception in which the individual creates and recreates natural or fantastic worlds using material elements and various techniques that allow them to express their feelings, emotions, and perceptions of the surrounding world.</p>
      </div>

    </div>
    <script src="../JAVASCRIPT/carrusel-index.js"></script>
  </section>

  <?php include("../HTMLEN/footer.php"); ?>

</body>

</html>
