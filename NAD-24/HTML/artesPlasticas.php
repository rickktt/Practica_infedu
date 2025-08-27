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
  <link rel="stylesheet" href="../CSS/artesPlasticas.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body class="background">

  <?php
  include("../HTML/navbar.php");
  ?>
  <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/artesPlasticas.php'">
    <img src="../MEDIA/IMG/estados unidos.png" alt="estados unidos">
  </button>
  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
  </button>
  <section class="section2">
    <h1>Artes Plasticas</h1>
    <hr>

    <main>
      <div class="texto">
        <p>Entendemos por artes plásticas todas aquellas artes que utilizan materiales moldeables o manipulables en su
          proceso de creación.</p><br>

        <!-- Contenido oculto -->
        <div class="extra" id="contenidoExtra">
          <p>Las más conocidas son la pintura, la escultura y la arquitectura, pero también podemos contar entre ellas
            el dibujo, el grabado, la cerámica, la orfebrería, etc.</p><br>
          <p><b>OBJETIVO</b>construir formas e imágenes que presenten una visión del mundo o de la realidad de acuerdo a
            un conjunto de valores estéticos definidos por el artista.</p>
          <P>El término nació en el siglo XIX, para establecer una diferencia con respecto a las disciplinas que
            pertenecen a las 7 bellas artes. </P>
        </div>

        <!-- Botón ver más -->
        <button class="ver-mas-btn" onclick="mostrarContenido()">Ver más</button>
      </div>

      <div class="caja-lateral">
        <img src="../MEDIA/IMG/artes-pla-sticas.webp">
    </main>
    <script src="../JAVASCRIPT/vermas.js"></script>
  </section>



  <section class="section">
    <h1>Características</h1>
    <hr>
    <div class="img-container">
      <img src="../MEDIA/IMG/artesplasticas2.jpg">
    </div>

    <div class="text-container">
      <ul>
        <li>Las artes plásticas son expresiones artísticas versátiles y muy ricas. Entre sus principales características
          destacan:</li><br>
        <li><b>1. Manipulación:</b> toda arte plástica se basa en la manipulación de materiales, con el fin de ofrecer
          una creación propia de la expresión del artista. La manipulación de los materiales puede ser hecha mediante
          toda clase de herramientas</li><br>
        <li><b>2. Expresividad:</b> se trata de obras que reflejan y expresan la visión del artista que las ha creado. Y
          cuyas manifestaciones a menudo incluyen también elementos propios de una cultura, corriente o estilo en
          concreto</li><br>
        <li><b>3. Variedad técnica:</b> la variedad de técnicas utilizada en las artes plásticas es completísima,
          especialmente si atendemos a su definición, pues incluye cualquier elemento capaz de modificar o manipular un
          material.</li><br>
        <li>Esta variedad técnica trae consigo una gran cantidad de utensilios propios de cada arte plástica en concreto
          y más aún, de cada estilo o corriente artística. </li><br>

      </ul>

    </div>
  </section>

  <section class="estetica-section">
    <div class="columna-izquierda">
      <h1>Pintura</h1>
      <p>Existen diferentes estilos y géneros pictóricos, desarrollados a lo largo de la historia, que incluyen no sólo
        expresiones personales, propias del artista o pintor, sino también culturales.</p>
      <img src="../MEDIA/IMG/PINTURA.jpg" alt="arte contemporáneo">
    </div>

    <div class="columna-derecha">
      <h1>Tipos de artes plásticas</h1>
      <ul>
        <li>La pintura es una de las expresiones artísticas más antiguas de la humanidad. Su origen se remonta a 36.000
          años atrás, con las pinturas rupestres encontradas en la Cueva de Chauvet en Francia.</li><br>
        <li>Puede realizarse mediante una amplia variedad de técnicas y materiales, como el óleo, el acrílico, la
          acuarela o la pintura al fresco, entre otras.</li><br>
        <li>Se realiza mediante la aplicación de pigmentos líquidos sobre una superficie. Esta puede ser un papel, un
          lienzo, madera o tela o incluso la piedra. </li><br>
        <li>Además, para pintar se han utilizando también diversos utensilios como pinceles, espátulas o incluso los
          propios dedos del artista.</li>
      </ul>
    </div>
  </section>

  <section class="seccion-arte">
    <div class="texto-izquierda">
      <p>La escultura es la creación de obras en tres dimensiones a partir de diferentes materiales, mediante su
        moldeado o manipulación.</p>
      <p>Es también una de las artes más antiguas que existen, practicada ya desde tiempos prehistóricos, alcanzando uno
        de sus máximos apogeos en la Antigua Grecia. En este sentido, la escultura occidental (como disciplina plástica)
        basa una gran cantidad de sus valores estéticos en lo que se denomina arte clásico.</p>
      <p>Según el estilo y la técnica utilizada podemos encontrar también varios géneros escultóricos: escultura de
        bulto redondo, el relieve y el bajorrelieve, la talla en madera, en arcilla, en piedra o en metal. </p>

    </div>
    <div class="imagen-central">
      <h2>Escultura</h2>
      <img src="../MEDIA/IMG/escultura.png" alt="Para que sirven las artes contemporaneas">
      <p>Entre los materiales más utilizados están la madera, la piedra (entre ellas destaca el mármol), metal (como el
        bronce), etc.</p>
    </div>
  </section>



  <!----CLASIFICACIÓN artes visuales---->
  <section class="titulo">
    <h1>Clasificación de las Artes Visuales</h1>
    <hr>
    <div class="tarjetas">
      <div class="tarjeta">
        <img src="../MEDIA/IMG/arquitectura.jpg" alt="Representación de las Artes Populares">
        <p>La arquitectura es también una de las artes más antiguas e importantes que existen. Al igual que sucede con
          la pintura y la escultura, sus orígenes están ya en la prehistoria. </p>
        <p><em>Se conservan construcciones arquitectónicas de la mayoría de periodos de la historia y culturas y su
            evolución está vinculada a las diferentes formas de vida y organización social de los seres humanos.</p>
        </em>
        <a href="../HTML/artesPopulares.php" class="boton-vermas">Ver más</a>
      </div>
      <div class="tarjeta">
        <img src="../MEDIA/IMG/dibujo.webp" alt="Representación de las Artes Gráficas">
        <h1>Dibujo</h1>
        <p>Ha sido un lenguaje y una herramienta de expresión y comunicación universal y una vía de transmisión de
          símbolos y signos en todas las culturas.</p>
        <p><em>El dibujo es el arte y la técnica de crear imágenes sobre una superficie por medio de líneas, formas y
            trazos. Mediante el acto de dibujar, queda registrada una imagen.</p></em>
        <a href="../HTML/artesGraficas.php" class="boton-vermas">Ver más</a>
      </div>
      <div class="tarjeta">
        <img src="../MEDIA/IMG/grabado.jpg" alt="Representación del Arte Contemporáneo">
        <h1>Grabado</h1>
        <p>El arte del grabado es una de las técnicas que conllevan uno de los procesos o pasos que los artistas deben
          seguir para poder plasmar su imaginación en pliegos de papel</p>
        <p><em>Se trata de una técnica de impresión de imágenes sobre una superficie. Para ello se utilizan diferentes
            materiales, tanto para crear el molde, como para recibir la imagen impresa.</p></em>
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