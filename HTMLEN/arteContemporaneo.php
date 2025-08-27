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
  <title>Contemporary Art</title>
  <link rel="stylesheet" href="../CSS/arteContemporaneo.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body class="background">

  <?php
  include("../HTMLEN/navbar.php");
  ?>
  <button class="theme-toggle-left" onclick="window.location.href='../HTML/arteContemporaneo.php'">
    <img src="../MEDIA/IMG/españa.png" alt="estados unidos">
    <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
      <span class="theme-icon sun-icon">☀️</span>
      <span class="theme-icon moon-icon">🌙</span>
    </button>

    <section class="section2">
      <h1>Contemporary Art</h1>
      <hr>

      <main>
        <div class="texto">
          <p>Contemporary art is a term that describes current art, generally referring to art produced since the 1970s.
            The term "contemporary" encompasses a very heterogeneous set of practices, whose contemporaneity is obsolete
            by definition.</p> <br>

          <!-- Hidden content -->
          <div class="extra" id="contenidoExtra">
            <p>Contemporary art stands out for its plurality, innovation, and reflection on today's society. It is
              characterized by its diversity of media and techniques, its ability to address complex themes, and its
              constant evolution.</p><br>
            <p>Contemporary art serves to reflect on and question the present reality, challenge conventions, explore
              new perspectives, and promote reflection on society and culture. </p><br>
            <p>It fosters creativity, innovation, and artistic experimentation, and can also serve as a tool for
              education, intercultural dialogue, and social development.</p>
          </div>

          <!-- View more button -->
          <button class="ver-mas-btn" onclick="mostrarContenido()">View More</button>
        </div>

        <div class="caja-lateral">
          <img src="../MEDIA/IMG/ARTECONTEMPORÁNEO.jpg" alt="Visual artwork">
      </main>
      <script src="../JAVASCRIPTEN/vermas.js"></script>
    </section>



    <section class="section">
      <h1>Fundamental Criteria</h1>
      <hr>
      <div class="img-container">
        <img src="../MEDIA/IMG/artecontemporaneo2.jpg" alt="Various artworks" />
      </div>

      <div class="text-container">
        <p><strong>1:</strong> Art and the Contemporary Age: It is related to the beginning of the Contemporary Age, at
          the end of the 18th century, with the French Revolution, between 1789 and 1799. Contemporary art begins with
          Romanticism, characterized by an emphasis on freedom, individuality, emotions, and subjectivity.</p>
        <p><strong>2:</strong> Contemporary Art and the Avant-garde: It emerged in the early 20th century, and its works
          featured ideas that revolutionized the art institution.</p>
        <p><strong>3:</strong> Contemporary Art and Postmodernism: It includes works that emerged at the end of the
          1960s and early 1970s, highlighting movements such as Pop Art, Conceptual Art, and Hyperrealism, among others.
        </p>

      </div>
    </section>

    <section class="estetica-section">
      <div class="columna-izquierda">
        <h2>Types of Contemporary Art</h2>
        <ul>
          <li>Contemporary digital art (or digital art) is a form of artistic expression that uses digital technologies
            to create, display, and distribute artworks.</li>
        </ul>
        <img src="../MEDIA/IMG/artevirtual.jpg" alt="Contemporary art">
      </div>

      <div class="columna-derecha">
        <h2>DIGITAL ART</h2>
        <p>Characteristics of contemporary digital art: Use of digital technologies: Digital art relies on the use of
          digital tools and software.</p>
        <p>Diversity of expression: Digital art can manifest in a wide variety of forms, including generative art.</p>
        <p>Interaction and participation: Digital art often encourages interaction and audience participation, blurring
          the line between artist and viewer.</p>
      </div>
    </section>

    <section class="seccion-arte">
      <div class="texto-izquierda">
        <h2>Contemporary art is important because:</h2>
        <ul>
          <li>Contemporary art is important because it acts as a mirror of current society,</li>
          <li>helping us understand the changes, issues, and challenges of the modern world.</li>
          <li>Its value lies not only in aesthetics, but in its ability to generate reflection,</li>
          <li>dialogue, and awareness.</li>
        </ul>
      </div>
      <div class="imagen-central">
        <img src="../MEDIA/IMG/artecontemporaneo4.jpg" alt="What contemporary arts are for">
      </div>

      <div class="texto-derecha">
        <h2>What are Contemporary Arts for?</h2>
        <p>
          Contemporary art serves as a medium to reflect on and question current reality, addressing social, political,
          cultural, and environmental issues affecting society. Through its diversity of forms and techniques, it
          promotes creativity, innovation, and critical thinking, inviting the viewer to reflect on the world around
          them.
        </p>
      </div>
    </section>



    <!----VISUAL ART CLASSIFICATION---->
    <section class="titulo">
      <h1>Classification of Visual Arts</h1>
      <hr>
      <div class="tarjetas">
        <div class="tarjeta">
          <img src="../MEDIAEN/IMG/merlina.jpeg" alt="Representation of Plastic Arts">
          <h1>Conceptual Art</h1>
          <p>An artistic movement where the idea or concept behind the artwork is more important than its physical or
            aesthetic execution.</p>
          <p><em>Conceptual art prioritizes reflection, meaning, and the idea the artist wants to convey.</p></em>
          <a href="../HTMLEN/artesPlasticas.php" class="boton-vermas">View More</a>
        </div>
        <div class="tarjeta">
          <img src="../MEDIA/IMG/urbano2.jpg" alt="Representation of Popular Arts">
          <h1>Urban Art</h1>
          <p>An art form that manifests in public spaces, such as streets, walls, and buildings.</p>
          <p><em>It is characterized by its ephemeral nature and its ability to communicate political, social, and
              cultural messages.</p></em>
          <a href="../HTMLEN/artesPopulares.php" class="boton-vermas">View More</a>
        </div>
        <div class="tarjeta">
          <img src="../MEDIA/IMG/pop.jpg" alt="Representation of Graphic Arts">
          <h1>Pop Art</h1>
          <p>An artistic movement that emerged in the mid-20th century, characterized by the use of images and objects
            from popular culture and mass consumption, such as advertisements, comics, celebrities, and everyday
            products.</p>
          <p><em>Collage, acrylic, oil, serigraphy... </p></em>
          <a href="../HTMLEN/artesGraficas.php" class="boton-vermas">View More</a>
        </div>
        <div class="tarjeta">
          <img src="../MEDIA/IMG/terrestre.jpg" alt="Representation of Contemporary Art">
          <h1>Earth Art</h1>
          <p>An artistic movement that emerged in the 1960s in the United States.</p>
          <p><em>It is characterized by the use of landscapes as raw material and creative space, often on a large scale
              and with natural materials.</p></em>
          <a href="../HTMLEN/arteContemporaneo" class="boton-vermas">View More</a>
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
              <img class="icon" src="../MEDIA/IMG/instagram.png" alt="Instagram logo">
            </a>
            <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
              <img class="icon" src="../MEDIA/IMG/facebook.png" alt="Facebook logo">
            </a>
            <a href="https://www.twitter.com" target="_blank" aria-label="Twitter">
              <img class="icon" src="../MEDIA/IMG/x.png" alt="Twitter logo">
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