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
  <title>Artes Viisuales</title>
  <link rel="stylesheet" href="../CSS/arteContemporaneo.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body class="background">

  <?php
  include("../HTML/navbar.php");
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

    <main>
      <div class="texto">
        <p>El arte contemporáneo es un término que describe el arte actual, generalmente referido al arte producido a
          partir de la década de 1970. El término «contemporáneo» abarca un conjunto muy heterogéneo de prácticas cuya
          contemporaneidad resulta obsoleta por definición.</p> <br>

        <!-- Contenido oculto -->
        <div class="extra" id="contenidoExtra">
          <p>El arte contemporáneo destaca por su pluralidad, innovación y reflexión sobre la sociedad actual. Se
            caracteriza por su diversidad de medios y técnicas, su capacidad para abordar temas complejos y su constante
            evolución.</p><br>
          <p>El arte contemporáneo sirve para reflexionar y cuestionar la realidad actual, desafiar las convenciones,
            explorar nuevas perspectivas y promover la reflexión sobre la sociedad y la cultura. </p><br>
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



  <section class="section">
    <h1>Criterios fundamentales</h1>
    <hr>
    <div class="img-container">
      <img src="../MEDIA/IMG/artecontemporaneo2.jpg" alt="Obras de arte variadas" />
    </div>

    <div class="text-container">
      <p><strong>1:</strong> Arte y la Edad Contemporánea: Se relaciona con el inicio de la Edad Contemporánea, a
        finales del siglo XVIII, con la Revolución Francesa, entre 1789 y 1799. El arte contemporáneo comienza con el
        Romanticismo, caracterizado por un énfasis en la libertad, la individualidad, los sentimientos y la
        subjetividad.</p>
      <p><strong>2:</strong> Arte contemporáneo y vanguardia: Surgió a principios del siglo XX y sus obras destacaron
        ideas que revolucionaron la institución artística.</p>
      <p><strong>3:</strong> Arte contemporáneo y posmodernismo: Incluye obras que surgieron a finales de la década de
        1960 y principios de la de 1970, destacando los movimientos del arte pop, el arte conceptual y el hiperrealismo,
        entre otros.</p>

    </div>
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

  <section class="seccion-arte">
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
  <section class="titulo">
    <h1>Clasificación de las Artes Visuales</h1>
    <hr>
    <div class="tarjetas">
      <div class="tarjeta">
        <img src="../MEDIA/IMG/merlina.jpeg" alt="Representación de las Artes Plásticas">
        <h1>Arte Conceptual</h1>
        <p> movimiento artístico donde la idea o concepto detrás de la obra es más importante que su realización física
          o estética.</p>
        <p><em>El arte conceptual prioriza la reflexión, el significado y la idea que el artista quiere transmitir.</p>
        </em>
        <a href="../HTML/artesPlasticas.php" class="boton-vermas">Ver más</a>
      </div>
      <div class="tarjeta">
        <img src="../MEDIA/IMG/urbano2.jpg" alt="Representación de las Artes Populares">
        <h1>Arte Urbano</h1>
        <p>Forma de expresión artística que se manifiesta en espacios públicos, como calles, muros y edificios.</p>
        <p><em>Se caracteriza por su naturaleza efímera y su capacidad para comunicar mensajes políticos, sociales y
            culturales.</p></em>
        <a href="../HTML/artesPopulares.php" class="boton-vermas">Ver más</a>
      </div>
      <div class="tarjeta">
        <img src="../MEDIA/IMG/pop.jpg" alt="Representación de las Artes Gráficas">
        <h1>Arte Pop</h1>
        <p>movimiento artístico que surgió a mediados del siglo XX, caracterizado por el uso de imágenes y objetos de la
          cultura popular y de consumo masivo, como anuncios publicitarios, cómics, celebridades y productos cotidianos.
        </p>
        <p><em>collage, acrílico, óleo, serigrafía... </p></em>
        <a href="../HTML/artesGraficas.php" class="boton-vermas">Ver más</a>
      </div>
      <div class="tarjeta">
        <img src="../MEDIA/IMG/terrestre.jpg" alt="Representación del Arte Contemporáneo">
        <h1>Arte Terrestre</h1>
        <p>movimiento artístico que surgió en la década de 1960 en Estados Unidos.</p>
        <p><em>Se caracteriza por la utilización del paisaje como materia prima y espacio de creación, a menudo a gran
            escala y con materiales naturales.</p></em>
        <a href="../HTML/arteContemporaneo" class="boton-vermas">Ver más</a>
      </div>
    </div>
  </section>


  <!-- PIE DE PÁGINA -->
  <footer>
    <div class="footer-left">
      <img src="../MEDIA/IMG/LOGONAD.png">
      <div>
        <b>NAD</b><br>
        Nice Art of Dreams<br>
        © 2025 Nice Art of Dreams
        <div class="social-icons">
          <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
            <img class="icon" src="../MEDIA/IMG/instagram.png" alt="Logo ed Instagram">
          </a>
          <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
            <img class="icon" src="../MEDIA/IMG/facebook.png" alt="Logo de facebook">
          </a>
          <a href="https://www.twitter.com" target="_blank" aria-label="Twitter">
            <img class="icon" src="../MEDIA/IMG/x.png" alt="Logo de Twitter">
          </a>
        </div>
      </div>
    </div>
    <div class="footer-column">
      <h4>Opciones</h4>
      <p>Artes Visuales</p>
      <p>Bellas Artes</p>
      <p>Artes Gráficas</p>
      <p>Artes Populares</p>
      <p>Arte Contemporáneo</p>
    </div>
    <div class="footer-column">
      <h4>Aviso Legal</h4>
      <p>Política de Privacidad</p>
      <p>Términos de Servicio</p>
      <p>Contáctanos</p>
    </div>
  </footer>
</body>

</html>