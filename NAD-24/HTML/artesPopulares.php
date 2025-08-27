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
  <link rel="stylesheet" href="../CSS/artesPopulares.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body class="background">

  <?php
  include("../HTML/navbar.php");
  ?>
  <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/artesPopulares.php'">
    <img src="../MEDIA/IMG/estados unidos.png" alt="estados unidos">
  </button>
  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
  </button>
  <section class="section2">
    <h1>Artes Populares</h1>
    <hr>

    <main>
      <div class="texto">
        <p>El arte popular es una categoría que designa el arte “producido por el pueblo”. Es un concepto cambiante y
          ambiguo (ya que la noción de pueblo cambia según el período histórico y el ámbito geográfico).</p> <br>
        <!-- Contenido oculto -->
        <div class="extra" id="contenidoExtra">
          <p>Según esa distinción, el “gran” arte aspira a lo bello y lo “universal” (igual para todas lasculturas),
            mientras que el arte popular, asociado a los oficios, es simple, localista, utilitario, decorativo o
            meramente técnico.</p><br>
          <p>El arte contemporáneo sirve para reflexionar y cuestionar la realidad actual, desafiar las convenciones,
            explorar nuevas perspectivas y promover la reflexión sobre la sociedad y la cultura. </p><br>
          <p>Además de hablar de arte popular para referirse al folklore o las tradiciones, en ciertos contextos se
            vincula el concepto a las expresiones masificadas o de consumo “fácil”, por oposición a otras formas
            estéticas más elaboradas y menos difundidas. </p>
        </div>

        <!-- Botón ver más -->
        <button class="ver-mas-btn" onclick="mostrarContenido()">Ver más</button>
      </div>

      <div class="caja-lateral">
        <img src="../MEDIA/IMG/contemporaneo.jpg">
        <p>El arte popular es la expresión creativa más dinámica y viva de una cultura, pues está en conexión directa
          con los valores, la cosmovisión, las tradiciones y la identidad del grupo humano que lo produce.</p>
    </main>
    <script src="../JAVASCRIPT/vermas.js"></script>
  </section>



  <section class="section">
    <h1>Características</h1>
    <hr>
    <div class="img-container">
      <img src="../MEDIA/IMG/ARTESPOPULARES.jpeg">
    </div>

    <div class="text-container">
      <ul>
        <li><b>1:</b> Se asocia a las clases populares. Es producido por las clases populares de manera independiente,
          fuera de la academia o de instituciones oficiales.</li><br>
        <li><b>2:</b> Se transmite entre generaciones. Se transmiten a través de la comunicación (generalmente oral) de
          las tradiciones y de las prácticas artesanales.</li><br>
        <li><b>3:</b>Está integrado con la vida. El arte popular adquiere significado en su integración con las
          actividades de la vida en comunidad.</li><br>
        <li><b>4:</b>No pertenece a un período histórico específico. Es una forma de expresión que comparten sociedades
          de todos los momentos de la historia.</li><br>
      </ul>
    </div>
  </section>

  <section class="estetica-section">
    <div class="columna-izquierda">
      <h1>ARTE RELIGIOSO</h1>
      <li>El Arte ha estado ligado desde sus orígenes a la religión, tomando en consideración que el Arte Religioso, es
        una denominación utilizada para todas aquellas producciones artísticas que tienen como fin un culto a lo sagrado
        o divino, éste tiene sus orígenes en la consolidación de la fe y cruza la historia del arte desde la época
        pre-romántica hasta el neoclasicismo en el siglo XIX. </li><br>
      <li>Durante el trayecto de los siglos se ha reconocido la fe, por lo que podemos apreciar que el Arte Religioso,
        intenta determinar cada pasaje y aspectos divinos por medio de la pintura, mosaicos y esculturas.</li><br>
      <li> Las representaciones más frecuentes en el cristianismo nos muestran la Anunciación, la Natividad, el
        Bautismo, el Juicio, la Crucifixión, Muerte y Resurrección, así como de santos y profetas, ya sea en solitario o
        representando escenas inspiradas en textos sagrados. </li>
      <img src="../MEDIA/IMG/arteReligiosos.jpg" alt="arte Religioso">
    </div>

    <div class="columna-derecha">
      <h1>Tipos de artes populares</h1>
      <p>La artesanía es el arte y técnica de elaborar objetos o productos de forma manual, con poca o ninguna
        intervención de maquinaria industrial, y mediante métodos tradicionales transmitidos de generación en
        generación.</p>
      <p>Este tipo de trabajo suele emplear materias primas locales y herramientas simples. Las técnicas utilizadas
        forman parte del patrimonio cultural inmaterial de una comunidad específica, lo que otorga a cada pieza un valor
        simbólico y una identidad única.</p>
      <p>Las piezas de artesanía pueden tener fines muy diversos: domésticos, ornamentales, ceremoniales, simbólicos, o
        utilitarios, como el vestuario o los instrumentos de trabajo.</p>
    </div>
  </section>

  <section class="seccion-arte">
    <div class="texto-izquierda">
      <h2>ARTESANIAS</h2>
      <p>Los productos artesanales destacan por su calidad, originalidad y valor cultural. Reflejan costumbres,
        creencias, historia y recursos del entorno donde son creados. </p>
    </div>
    <div class="imagen-central">
      <img src="../MEDIA/IMG/artesanias.webp" alt="ARTESANIAS">
    </div>
  </section>



  <!----CLASIFICACIÓN artes visuales---->
  <section class="titulo">
    <h1>Clasificación de las Artes Visuales</h1>
    <hr>
    <div class="tarjetas">
      <div class="tarjeta">
        <img src="../MEDIA/IMG/ARTESPLASTICAS.jpg" alt="Artes Plásticas">
        <h1>CERÁMICA</h1>
        <p> La cerámica es el arte de fabricar objetos elaborados con arcilla cocida. La arcilla es una roca
          sedimentaria, constituida por agregados de silicatos de aluminio hidratados, de color blanco cuando es pura y
          varía de color según las impurezas que contenga.</p>
        <p><em>Este arte es uno de los inventos más importantes de la humanidad. Poder almacenar y transportar
            productos, especialmente líquidos, fue una gran revolución.</em> </p>
        <a href="../HTML/artesPlasticas.php" class="boton-vermas">Ver más</a>
      </div>
      <div class="tarjeta">
        <img src="../MEDIA/IMG/alfareria.jpg" alt="Representación de las Artes Populares">
        <h1>ALFARERÍA</h1>
        <p>La alfarería es el arte de moldear barro o arcilla para crear objetos, generalmente mediante técnicas
          manuales o el uso del torno. Aunque originalmente se utilizaba para fabricar utensilios domésticos, hoy en día
          también se valora como una forma de expresión artística.</p>
        <p><em>Alfarería prehistórica: Los primeros objetos de alfarería datan de hace más de 12.000 años, como la
            cerámica Jomon en Japón. Estas piezas, hechas a mano, se usaban para almacenar alimentos y cocinar</em></p>
        <a href="../HTML/artesPopulares.php" class="boton-vermas">Ver más</a>
      </div>
      <div class="tarjeta">
        <img src="../MEDIA/IMG/orfebreria.jpg" alt="Representación de las Artes Gráficas">
        <h1>OFEBRERÍA</h1>
        <p>La orfebrería es el arte de crear piezas como joyas, objetos, adornos y accesorios de forma artesanal, a
          partir de metales preciosos o sus aleaciones.
          Las técnicas artesanales que utilizan los orfebres son igual de importantes que el resultado final. Estas
          técnicas son:</p>
        <em>
          <li><strong>RECOCIDO</strong> El recocido consiste en calentar el metal para reblandecerlo ya que al
            trabajarlo, tiende a endurecerse.</li>
          <li><strong>FUNDIDO</strong> En el fundido se busca calentar el metal hasta hacerlo líquido para después,
            poder vaciarlo en un molde.</li>
          <li><strong>GRABADO</strong> Seguro que estáis más familiarizadas con esta técnica que consiste en trazar
            dibujos sobre la superficie del metal.</li>
        </em></p>
        <a href="../HTML/artesGraficas.php" class="boton-vermas">Ver más</a>
      </div>
      <div class="tarjeta">
        <img src="../MEDIA/IMG/tapiceria.webp" alt="Representación del Arte Contemporáneo">
        <h1>TAPICERÍA</h1>
        <p>La primera acepción de tapicería que menciona la Real Academia Española (RAE) en su diccionario refiere a un
          conjunto o una combinación de tapices. Un tapiz, en tanto, es un paño de gran tamaño o un tejido que se
          utiliza para cubrir el piso u otra superficie.</p>
        <em>
          <li><strong>La tradicional:</strong> usa crin de caballo, con frecuencia puesta en resortes que se sostienen
            mediante correas.</li>
          <li><strong>La contemporánea:</strong> usa perfiles y espuma sintética</li>
          <li><strong>La semi-tradicional:</strong> se trata de una suerte de fusión entre las dos técnicas anteriores.
            La tradicional se aprecia en los flejes y los resortes, mientras que la contemporánea, en el uso de espuma
            para el relleno..</li>
        </em>
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