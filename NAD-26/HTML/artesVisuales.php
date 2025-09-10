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

  <?php include("../HTML/nav1.php"); ?>

  <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/artesVisuales.php'">
    <img src="../MEDIA/IMG/estados unidos.png" alt="estados unidos">
  </button>
  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
  </button>

  <!-- Sección principal -->
  <section class="section2">
    <div>
      <img class="lam" src="../MEDIA/IMG/lamparaI.png" alt="">
    </div>
    <h1>Artes Visuales</h1>
    <hr>
    <main>
      <div class="texto">
        <p>
          Los seres humanos somos personas expresivas por naturaleza, ya que nos gusta compartirle al mundo la
          percepción que tenemos de las cosas; las artes visuales contribuyen a esta labor. Es gracias a las artes
          visuales que hoy en día nos encontramos sumergidos en un mundo lleno de expresiones artísticas.
        </p>

        <!-- Contenido oculto -->
        <div class="extra" id="contenidoExtra">
          <p>
            Las artes visuales son una manifestación artística, expresiva, de percepción visual en la cual el
            individuo crea y recrea mundos naturales o fantásticos mediante elementos materiales utilizando diversas
            técnicas que le permiten expresar sus sentimientos, emociones y percepciones del mundo que lo rodea.
          </p>
          <p>
            El concepto Artes Visuales se gesta a fines de la Segunda Guerra Mundial, cuando los artistas europeos que
            habían emigrado a New York asientan una producción artística que se relaciona con la libertad expresiva y
            formal propiciada por las vanguardias de fines del Siglo XIX, a lo que se sumó el crucial empuje que
            significaron las propuestas de Marcel Duchamp.
          </p>
        </div>

        <!-- Botón ver más -->
        <button class="ver-mas-btn" onclick="mostrarContenido()">Ver más</button>
      </div>

      <div class="caja-lateral">
        <img src="../MEDIA/IMG/artesVisuales_1.jpg" alt="Obra de arte visual">
        <blockquote>
          <strong>Es alrededor de 1980 cuando el término “Artes Visuales” empieza a predominar en el
            vocabulario pues es más adecuado para el arte contemporáneo que la denominación Artes
            Plásticas.</strong>
        </blockquote>
      </div>
      <div>
        <img class="lam2" src="../MEDIA/IMG/lamparaD.png" alt="">
      </div>
      <script src="../JAVASCRIPT/vermas.js"></script>
    </main>
  </section>

  <!-- Elementos clave -->
  <section class="section">
    <h1>Elementos clave de las Artes Visuales</h1>
    <main>
      <div class="img-container">
        <img src="../MEDIA/IMG/artesVisuales_1.jpg" alt="Obras de arte variadas" />
      </div>
      <div class="text-container">
        <p><strong>Percepción visual:</strong> La vista es el sentido principal a través del cual se aprecia y comprende
          la obra de arte.</p>
        <p><strong>Expresión creativa:</strong> Permiten a los artistas expresar sus ideas, emociones y percepciones del
          mundo a través de la creación de imágenes.</p>
        <p><strong>Diversidad de técnicas:</strong> Incluyen una amplia gama de técnicas, desde la pintura y la escultura
          hasta la fotografía y el arte digital.</p>
        <p><strong>Interdisciplinariedad:</strong> Las artes visuales a menudo se cruzan con otras disciplinas artísticas
          y con la tecnología.</p>
        <blockquote>
          “El arte no reproduce lo visible, sino que hace visible lo invisible.” – Paul Klee
        </blockquote>
      </div>
    </main>
  </section>



  <!-- Contenedor de ideas -->
  <section class="contenedor-ideas">
    <h1>Ideas básicas que definen el Arte visual</h1>
    <ul>
      <li><strong>Apropiación:</strong> Por parte del artista, de una cantidad ilimitada de recursos así como de
        estilos, incluso de siglos pasados.</li>
      <li><strong>Circulación y Experimentación:</strong> Se presenta a través de diferentes soportes y materias.</li>
      <li><strong>Pluralismo y Globalización:</strong> Tiene que ver con la fluida comunicación entre artistas de
        distintos países y continentes.</li>
      <li><strong>Estrategias Expositivas:</strong> Tanto los artistas como los curadores buscan nuevas estrategias
        expositivas acordes a la naturaleza de las obras.</li>
    </ul>
    <div>
    <img class="poste" src="../MEDIA/IMG/postes4.png" alt="">
    <img class="poste1" src="../MEDIA/IMG/postes4.png" alt="">
  </div>
  </section>

  <!-- Importancia -->
  <section class="seccion-arte">
    <div class="texto-izquierda">
      <h2>Las artes visuales son importantes porque:</h2>
      <ul>
        <li>Permiten la expresión creativa y la comunicación de ideas y emociones.</li>
        <li>Ayudan a comprender la cultura y la historia de diferentes sociedades.</li>
        <li>Tienen un impacto en la sociedad y pueden influir en la forma en que las personas perciben el mundo.</li>
        <li>Son una herramienta para la educación y el desarrollo personal.</li>
      </ul>
    </div>
    <div class="imagen-central">
      <img src="../MEDIA/IMG/artesVisuales3.jpg" alt="Collage de artes visuales">
    </div>

    <div class="texto-derecha">
      <h2>¿Para qué sirven las artes visuales?</h2>
      <p>
        Sirven o cumplen con una misión estética, ideológica, conmemorativa, pedagógica y como un mecanismo para
        expandir la realidad. También son elementales para dar sensibilidad al espectador, para transformar espacios y
        funcionan como un excelente vehículo para la expresión.
      </p>
    </div>
  </section>

  <!-- Criterios estéticos e ideas -->
  <section class="estetica-section">
    <div class="columna-izquierda">
      <h1>Criterios Estéticos</h1>
      <p>La armonía, el color, la composición, el espacio, el equilibrioi, la luz, el movimiento, la perspectiva, el ritmo y la textura.</p>
      <img src="../MEDIA/IMG/criterios" alt="Obra de arte clásica" />
      <p>A partir de estos códigos o lenguajes que el artista busca transmitir al espectador una experiencia estética
        determinada.</p>
    </div>

    <div class="columna-derecha">
      <h1>Ideas básicas que definen el Arte visual</h1>
      <p><strong>Apropiación:</strong> Por parte del artista, de una cantidad ilimitada de recursos así como de estilos,
        incluso de siglos pasados.</p>
      <p><strong>Circulación y Experimentación:</strong> Se presenta a través de diferentes soportes y materias.</p>
      <p><strong>Pluralismo y Globalización:</strong> Tiene que ver con la fluida comunicación entre artistas de
        distintos países y continentes.</p>
      <p><strong>Estrategias Expositivas:</strong> Tanto los artistas como los curadores buscan nuevas estrategias
        expositivas acordes a la naturaleza de las obras.</p>
    </div>
  </section>

  <!----CLASIFICACIÓN artes visuales---->
  <section class="clasificacion-artes">
    <div class="contenedor-clasificacion">

      <div class="carrusel-container">
        <button class="carrusel-btn izquierda">&#10094;</button>
        <div class="carrusel">
          <div class="tarjeta">
            <img src="../MEDIA/IMG/ARTESPLASTICAS.jpg" alt="Artes Plásticas">
            <h2>Artes Plásticas</h2>
            <p>Artes que utilizan materiales moldeables o manipulables en su proceso de creación.</p>
            <p><em>Pintura, Dibujo, Escultura...</em></p>
            <a href="../HTML/artesPlasticas.php" class="boton-vermas">Ver más</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/ARTESPOPULARES.jpeg" alt="Artes Populares">
            <h2>Artes Populares</h2>
            <p>Manifestaciones culturales y artísticas que forman parte de la tradición de los pueblos.</p>
            <p><em>Tejidos, Cerámica, Artesanía...</em></p>
            <a href="../HTML/artesPopulares.php" class="boton-vermas">Ver más</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/ARTESGRAFICas.jpg" alt="Artes Gráficas">
            <h2>Artes Gráficas</h2>
            <p>Técnicas que generan elementos visuales a partir de dibujos y métodos informáticos.</p>
            <p><em>Ilustración, Tipografía, Lettering...</em></p>
            <a href="../HTML/artesGraficas.php" class="boton-vermas">Ver más</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/ARTECONTEMPORÁNEO.jpg" alt="Arte Contemporáneo">
            <h2>Arte Contemporáneo</h2>
            <p>Manifestaciones artísticas que surgen <br>a partir del siglo XX.</p>
            <p><em>Arte Digital, Conceptual, Urbano...</em></p>
            <a href="../HTML/arteContemporaneo.php" class="boton-vermas">Ver más</a>
          </div>
        </div>
        <button class="carrusel-btn derecha">&#10095;</button>
      </div>

      <div class="textoClas">
        <h1>Clasificación de las</h1>
        <h1>Artes Visuales</h1>
        <hr>
        <p>Las artes visuales son una manifestación artística, expresiva, de percepción visual en la cual el individuo crea y recrea mundos naturales o fantásticos mediante elementos materiales utilizando diversas técnicas que le permiten expresar sus sentimientos, emociones y percepciones del mundo que lo rodea.</p>
      </div>

    </div>
    <script src="../JAVASCRIPT/carrusel-index.js"></script>
  </section>



  <?php include("../HTML/footer.php"); ?>

</body>

</html>