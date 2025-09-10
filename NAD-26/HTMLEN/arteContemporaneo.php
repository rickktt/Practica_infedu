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
  <link rel="stylesheet" href="../CSS/nav.css">
</head>

<body class="background">

  <?php include("../HTMLEN/nav1.php"); ?>

  <!-- Language and theme buttons -->
  <button class="theme-toggle-left" onclick="window.location.href='../HTML/arteContemporaneo.php'">
    <img src="../MEDIA/IMG/españa.png" alt="Spanish">
  </button>
  <button class="theme-toggle" id="themeToggle" aria-label="Toggle light/dark mode">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
  </button>

  <!-- Main section -->
  <section class="section2">
    <h1>Contemporary Art</h1>
    <hr>
     <div>
            <img class="lam" src="../MEDIA/IMG/lamparaI.png" alt="">
        </div>
        <div>
            <img class="lam2" src="../MEDIA/IMG/lamparaD.png" alt="">
        </div>  
    <main>
      <div class="texto">
        <p>Contemporary art is a term that describes current art, generally referring to art produced since the 1970s.
          The term "contemporary" encompasses a very heterogeneous set of practices, whose contemporaneity is obsolete
          by definition.</p>

        <!-- Hidden content -->
        <div class="extra" id="contenidoExtra">
          <p>Contemporary art stands out for its plurality, innovation, and reflection on today's society. It is
            characterized by its diversity of media and techniques, its ability to address complex themes, and its
            constant evolution.</p>
          <p>Contemporary art serves to reflect on and question the present reality, challenge conventions, explore
            new perspectives, and promote reflection on society and culture.</p>
          <p>It fosters creativity, innovation, and artistic experimentation, and can also serve as a tool for education,
            intercultural dialogue, and social development.</p>
        </div>

        <!-- View more button -->
        <button class="ver-mas-btn" onclick="mostrarContenido()">View More</button>
      </div>

      <div class="caja-lateral">
        <img src="../MEDIA/IMG/ARTECONTEMPORÁNEO.jpg" alt="Visual artwork">
      </div>
    </main>
    <script src="../JAVASCRIPT/vermas.js"></script>
  </section>

  <!-- Fundamental criteria -->
  <section class="section">
    <h1>Fundamental Criteria</h1>
    <main>
      <div class="img-container">
        <img src="../MEDIA/IMG/artecontemporaneo2.jpg" alt="Various artworks" />
      </div>
      <div class="text-container">
        <p><strong>Art and the Contemporary Age:</strong> It is related to the beginning of the Contemporary Age,
          at the end of the 18th century, with the French Revolution (1789–1799). Contemporary art begins with
          Romanticism, emphasizing freedom, individuality, emotions, and subjectivity.</p>
        <p><strong>Contemporary Art and the Avant-garde:</strong> It emerged in the early 20th century, and its works
          featured ideas that revolutionized the art institution.</p>
        <p><strong>Contemporary Art and Postmodernism:</strong> Includes works from the late 1960s and early 1970s,
          highlighting movements such as Pop Art, Conceptual Art, and Hyperrealism, among others.</p>
      </div>
    </main>
  </section>

  <!-- Types of contemporary art -->
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
      <p>Characteristics: Use of digital technologies: Digital art relies on digital tools and software.</p>
      <p>Diversity of expression: Digital art can manifest in many forms, including generative art.</p>
      <p>Interaction and participation: Digital art often encourages interaction and audience participation,
        blurring the line between artist and viewer.</p>
    </div>
  </section>

  <!-- Importance -->
  <section class="estetica-section">
    <div class="texto-izquierda">
      <h2>Contemporary art is important because:</h2>
      <ul>
        <li>It acts as a mirror of current society,</li>
        <li>helping us understand changes, issues, and challenges of the modern world.</li>
        <li>Its value lies not only in aesthetics but in its ability to generate reflection,</li>
        <li>dialogue, and awareness.</li>
      </ul>
    </div>
    <div class="imagen-central">
      <img src="../MEDIA/IMG/artecontemporaneo4.jpg" alt="Purpose of contemporary art">
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

  <!-- Classification of visual arts -->
  <section class="clasificacion-artes">
    <div class="contenedor-clasificacion">

      <div class="carrusel-container">
        <button class="carrusel-btn izquierda">&#10094;</button>
        <div class="carrusel">
          <div class="tarjeta">
            <img src="../MEDIA/IMG/merlina.jpeg" alt="Conceptual Art">
            <h2>Conceptual Art</h2>
            <p>An artistic movement where the idea or concept behind the artwork is more important than its physical or
              aesthetic execution.</p>
            <p><em>Conceptual art prioritizes reflection, meaning, and the idea the artist wants to convey.</em></p>
            <a href="../HTML/artesPlasticas.php" class="boton-vermas">View More</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/urbano2.jpg" alt="Urban Art">
            <h2>Urban Art</h2>
            <p>An art form that manifests in public spaces, such as streets, walls, and buildings.</p>
            <p><em>Characterized by its ephemeral nature and its ability to communicate political, social, and cultural
                messages.</em></p>
            <a href="../HTML/artesPopulares.php" class="boton-vermas">View More</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/pop.jpg" alt="Pop Art">
            <h2>Pop Art</h2>
            <p>An artistic movement that emerged in the mid-20th century, characterized by the use of images and objects
              from popular culture and mass consumption.</p>
            <p><em>Collage, acrylic, oil, serigraphy...</em></p>
            <a href="../HTML/artesGraficas.php" class="boton-vermas">View More</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/terrestre.jpg" alt="Earth Art">
            <h2>Earth Art</h2>
            <p>An artistic movement that emerged in the 1960s in the United States.</p>
            <p><em>Characterized by the use of landscapes as raw material and creative space, often on a large scale and
                with natural materials.</em></p>
            <a href="../HTML/arteContemporaneo.php" class="boton-vermas">View More</a>
          </div>
        </div>
        <button class="carrusel-btn derecha">&#10095;</button>
      </div>

      <div class="textoClas">
        <h1>Classification of</h1>
        <h1>Visual Arts</h1>
        <hr>
        <p>Visual arts are an artistic, expressive manifestation of visual perception in which the individual creates
          and recreates natural or fantastic worlds using material elements and various techniques to express feelings,
          emotions, and perceptions of the surrounding world.</p>
      </div>

    </div>
    <script src="../JAVASCRIPT/carrusel-index.js"></script>
  </section>

  <?php include("../HTML/footer.php"); ?>
</body>

</html>
