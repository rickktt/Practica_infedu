<?php
session_start();
if (!isset($_SESSION['usuario'])) {

  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artes Viisuales</title>
  <link rel="stylesheet" href="../CSS/arteContemporaneo.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/DarkMode.css">
  <link rel="stylesheet" href="../CSS/nav.css">
</head>

<body class="background">

  <?php
  include("../HTML/nav1.php");
  ?>
  <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/arteContemporaneo.php'">
    <img src="../MEDIA/IMG/estados unidos.png" alt="estados unidos">
  </button>
  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
  </button>

  <section class="section2">
    <h1>Artes Contemporáneo</h1>
    <hr>
  
     <div>
            <img class="lam" src="../MEDIA/IMG/lamparaI.png" alt="">
        </div>
        <div>
            <img class="lam2" src="../MEDIA/IMG/lamparaD.png" alt="">
        </div>
    <main>
      <div class="texto">
        <p>El arte contemporáneo es un término que describe el arte actual, generalmente referido al arte producido a
          partir de la década de 1970. El término «contemporáneo» abarca un conjunto muy heterogéneo de prácticas cuya
          contemporaneidad resulta obsoleta por definición.</p>

        <!-- Contenido oculto -->
        <div class="extra" id="contenidoExtra">
          <p>El arte contemporáneo destaca por su pluralidad, innovación y reflexión sobre la sociedad actual. Se
            caracteriza por su diversidad de medios y técnicas, su capacidad para abordar temas complejos y su constante
            evolución.</p>
          <p>El arte contemporáneo sirve para reflexionar y cuestionar la realidad actual, desafiar las convenciones,
            explorar nuevas perspectivas y promover la reflexión sobre la sociedad y la cultura. </p>
          <p>Fomenta la creatividad, la innovación y la experimentación artística, y también puede servir como
            herramienta para la educación, el diálogo intercultural y el desarrollo social.</p>
        </div>

        <!-- Botón ver más -->
        <button class="ver-mas-btn" onclick="mostrarContenido()">Ver más</button>
      </div>

      <div class="caja-lateral">
        <img src="../MEDIA/IMG/ARTECONTEMPORÁNEO.jpg" alt="Obra de arte visual">
    </main>
    <script src="../JAVASCRIPT/vermas.js"></script>
  </section>



<!-- Criterios fundamentales -->
<section class="section">
  <h1>Criterios fundamentales</h1>
  <main>
    <div class="img-container">
      <img src="../MEDIA/IMG/artecontemporaneo2.jpg" alt="Obras de arte variadas" />
    </div>
    <div class="text-container">
      <p><strong>Arte y la Edad Contemporánea:</strong> Se relaciona con el inicio de la Edad Contemporánea, a finales del siglo XVIII, con la Revolución Francesa (1789–1799). El arte contemporáneo comienza con el Romanticismo, caracterizado por un énfasis en la libertad, la individualidad, los sentimientos y la subjetividad.</p>
      
      <p><strong>Arte contemporáneo y vanguardia:</strong> Surgió a principios del siglo XX y sus obras destacaron ideas que revolucionaron la institución artística.</p>
      
      <p><strong>Arte contemporáneo y posmodernismo:</strong> Incluye obras que surgieron a finales de la década de 1960 y principios de la de 1970, destacando los movimientos del arte pop, el arte conceptual y el hiperrealismo, entre otros.</p>
    </div>
  </main>
</section>


  <section class="estetica-section">
    <div class="columna-izquierda">
      <h2>Tipos de arte contemporáneo</h2>
      <ul>
        <li>El arte digital contemporáneo (o arte digital) es una forma de expresión artística que utiliza tecnologías
          digitales para crear, exhibir y difundir obras de arte.</li>
      </ul>
      <img src="../MEDIA/IMG/artevirtual.jpg" alt="arte contemporáneo">
    </div>

    <div class="columna-derecha">
      <h2>ARTE DIGITAL</h2>
      <p>Características del arte digital contemporáneo:Uso de tecnologías digitales:El arte digital se basa en el uso
        de herramientas y software digitales.</p>
      <p>Diversidad de expresión: El arte digital puede manifestarse en una amplia variedad de formas, incluido el arte
        generativo.</p>
      <p>Interacción y participación: El arte digital suele fomentar la interacción y la participación del espectador,
        difuminando la línea entre el artista y el público.</p>
    </div>
  </section>

  <section class="estetica-section">
    <div class="texto-izquierda">
      <h2>El arte contemporáneo es importante porque:</h2>
      <ul>
        <li>El arte contemporáneo es importante porque actúa como un espejo de la sociedad actual,</li>
        <li>ayudándonos a entender los cambios, problemas y desafíos del mundo moderno.</li>
        <li>Su valor no radica solo en la estética, sino en su capacidad de generar reflexión,</li>
        <li>diálogo y conciencia.</li>
      </ul>
    </div>
    <div class="imagen-central">
      <img src="../MEDIA/IMG/artecontemporaneo4.jpg" alt="Para que sirven las artes contemporaneas">
    </div>

    <div class="texto-derecha">
      <h2>¿Para qué siven las artes Contemporáneas?</h2>
      <p>
        El arte contemporáneo sirve como un medio para reflejar y cuestionar la realidad actual, abordando temas
        sociales, políticos, culturales y ambientales que afectan a la sociedad. A través de su diversidad de formas y
        técnicas, promueve la creatividad, la innovación y el pensamiento crítico, invitando al espectador a reflexionar
        sobre el mundo que lo rodea.
      </p>
    </div>
  </section>



  <!----CLASIFICACIÓN artes visuales---->
  <section class="clasificacion-artes">
    <div class="contenedor-clasificacion">

      <div class="carrusel-container">
        <button class="carrusel-btn izquierda">&#10094;</button>
        <div class="carrusel">

          <div class="tarjeta">
            <img src="../MEDIA/IMG/merlina.jpeg" alt="Representación de las Artes Plásticas">
            <h2>Arte Conceptual</h2>
            <p>Movimiento artístico donde la idea o concepto detrás de la obra es más importante que su realización física
              o estética.</p>
            <p><em>El arte conceptual prioriza la reflexión, el significado y la idea que el artista quiere transmitir.</em></p>
            <a href="../HTML/artesPlasticas.php" class="boton-vermas">Ver más</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/urbano2.jpg" alt="Representación de las Artes Populares">
            <h2>Arte Urbano</h2>
            <p>Forma de expresión artística que se manifiesta en espacios públicos, como calles, muros y edificios.</p>
            <p><em>Se caracteriza por su naturaleza efímera y su capacidad para comunicar mensajes políticos, sociales y
                culturales.</em></p>
            <a href="../HTML/artesPopulares.php" class="boton-vermas">Ver más</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/pop.jpg" alt="Representación de las Artes Gráficas">
            <h2>Arte Pop</h2>
            <p>Movimiento artístico que surgió a mediados del siglo XX, caracterizado por el uso de imágenes y objetos de la
              cultura popular y de consumo masivo, como anuncios publicitarios, cómics, celebridades y productos cotidianos.</p>
            <p><em>Collage, acrílico, óleo, serigrafía...</em></p>
            <a href="../HTML/artesGraficas.php" class="boton-vermas">Ver más</a>
          </div>

          <div class="tarjeta">
            <img src="../MEDIA/IMG/terrestre.jpg" alt="Representación del Arte Contemporáneo">
            <h2>Arte Terrestre</h2>
            <p>Movimiento artístico que surgió en la década de 1960 en Estados Unidos.</p>
            <p><em>Se caracteriza por la utilización del paisaje como materia prima y espacio de creación, a menudo a gran
                escala y con materiales naturales.</em></p>
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



  <?php
  include("../HTML/footer.php");
  ?>
</body>

</html>