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
  <link rel="stylesheet" href="../CSS/nav.css">
</head>

<body class="background">

  <?php
  include("../HTML/nav1.php");
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
 <div>
            <img class="lam" src="../MEDIA/IMG/lamparaI.png" alt="">
        </div>
        <div>
            <img class="lam2" src="../MEDIA/IMG/lamparaD.png" alt="">
        </div>
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



  <!-- Características -->
<section class="section">
  <h1>Características</h1>
  <main>
    <div class="img-container">
      <img src="../MEDIA/IMG/ARTESPOPULARES.jpeg" alt="Artes Populares" />
    </div>
    <div class="text-container">
      <p><strong>Se asocia a las clases populares:</strong> Es producido por las clases populares de manera independiente, fuera de la academia o de instituciones oficiales.</p>
      
      <p><strong>Se transmite entre generaciones:</strong> Se conserva a través de la comunicación (generalmente oral) de las tradiciones y de las prácticas artesanales.</p>
      
      <p><strong>Está integrado con la vida:</strong> El arte popular adquiere significado en su integración con las actividades de la vida en comunidad.</p>
      
      <p><strong>No pertenece a un período histórico específico:</strong> Es una forma de expresión compartida por sociedades de todos los momentos de la historia.</p>
    </div>
  </main>
</section>


  <!-- Artes Populares y Religiosas -->
<section class="clasificacion-artes">
  <div class="columna-izquierda">
    <h1>ARTESANÍAS</h1>
    <p>Los productos artesanales destacan por su calidad, originalidad y valor cultural. Reflejan costumbres,
      creencias, historia y recursos del entorno donde son creados.</p>
    <img src="../MEDIA/IMG/artesanias.webp" alt="Artesanías" />
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

<!-- Arte Religioso -->
<section class="section">
  <h1>Arte Religioso</h1>
  <main>
    <div class="img-container">
      <img src="../MEDIA/IMG/arteReligiosos.jpg" alt="Arte Religioso" />
    </div>
    <div class="text-container">
      <p><strong>Orígenes:</strong> El Arte Religioso es una denominación utilizada para todas aquellas producciones artísticas que tienen como fin un culto a lo sagrado o divino. Sus orígenes se relacionan con la consolidación de la fe y atraviesan la historia del arte desde la época pre-romántica hasta el neoclasicismo en el siglo XIX.</p>
      
      <p><strong>Función espiritual:</strong> A lo largo de los siglos ha buscado representar y transmitir la fe, empleando medios como la pintura, los mosaicos y la escultura para expresar lo divino.</p>
      
      <p><strong>Temáticas frecuentes:</strong> En el cristianismo destacan escenas como la Anunciación, la Natividad, el Bautismo, el Juicio, la Crucifixión, la Muerte y Resurrección, además de representaciones de santos y profetas.</p>

      <blockquote>
        “El arte religioso no solo representa lo sagrado, sino que busca acercar lo divino al ser humano.”
      </blockquote>
    </div>
  </main>
</section>




  <!----CLASIFICACIÓN artes visuales---->
<section class="clasificacion-artes">
  <div class="contenedor-clasificacion">

    <div class="carrusel-container">
      <button class="carrusel-btn izquierda">&#10094;</button>
      <div class="carrusel">

        <div class="tarjeta">
          <img src="../MEDIA/IMG/ARTESPLASTICAS.jpg" alt="Artes Plásticas - Cerámica">
          <h2>Cerámica</h2>
          <p>La cerámica es el arte de fabricar objetos elaborados con arcilla cocida. La arcilla es una roca
            sedimentaria, constituida por agregados de silicatos de aluminio hidratados, de color blanco cuando es pura y
            varía de color según las impurezas que contenga.</p>
          <p><em>Este arte es uno de los inventos más importantes de la humanidad. Poder almacenar y transportar
              productos, especialmente líquidos, fue una gran revolución.</em></p>
          <a href="../HTML/artesPlasticas.php" class="boton-vermas">Ver más</a>
        </div>

        <div class="tarjeta">
          <img src="../MEDIA/IMG/alfareria.jpg" alt="Artes Populares - Alfarería">
          <h2>Alfarería</h2>
          <p>La alfarería es el arte de moldear barro o arcilla para crear objetos, generalmente mediante técnicas
            manuales o el uso del torno. Aunque originalmente se utilizaba para fabricar utensilios domésticos, hoy en día
            también se valora como una forma de expresión artística.</p>
          <p><em>Alfarería prehistórica: Los primeros objetos de alfarería datan de hace más de 12.000 años, como la
              cerámica Jomon en Japón. Estas piezas, hechas a mano, se usaban para almacenar alimentos y cocinar.</em></p>
          <a href="../HTML/artesPopulares.php" class="boton-vermas">Ver más</a>
        </div>

        <div class="tarjeta">
          <img src="../MEDIA/IMG/orfebreria.jpg" alt="Artes Gráficas - Orfebrería">
          <h2>Orfebrería</h2>
          <p>La orfebrería es el arte de crear piezas como joyas, objetos, adornos y accesorios de forma artesanal, a
            partir de metales preciosos o sus aleaciones.  
            Las técnicas artesanales que utilizan los orfebres son igual de importantes que el resultado final. Estas
            técnicas son:</p>
          <p>Recocido: Consiste en calentar el metal para reblandecerlo ya que al trabajarlo tiende a endurecerse.</p>
          <p>Fundido: Se busca calentar el metal hasta hacerlo líquido para después poder vaciarlo en un molde.</p>
          <p>Grabado:Técnica que consiste en trazar dibujos sobre la superficie del metal.</p>
          <a href="../HTML/artesGraficas.php" class="boton-vermas">Ver más</a>
        </div>

        <div class="tarjeta">
          <img src="../MEDIA/IMG/tapiceria.webp" alt="Arte Contemporáneo - Tapicería">
          <h2>Tapicería</h2>
          <p>La primera acepción de tapicería que menciona la Real Academia Española (RAE) en su diccionario refiere a un
            conjunto o una combinación de tapices. Un tapiz, en tanto, es un paño de gran tamaño o un tejido que se
            utiliza para cubrir el piso u otra superficie.</p>
          <p> tradicional: Usa crin de caballo, con frecuencia puesta en resortes que se sostienen mediante correas.</p>
          <p>La contemporánea: Usa perfiles y espuma sintética.</p>
          <p>La semi-tradicional:Es una fusión entre las dos técnicas anteriores: la tradicional en flejes y resortes, y la contemporánea en el uso de espuma para el relleno.</p>
          <a href="../HTML/arteContemporaneo.php" class="boton-vermas">Ver más</a>
        </div>

        <div class="textoClas">
        <h1>Clasificación de las</h1>
        <h1>Artes Visuales</h1>
        <hr>
        <p>Las artes visuales son una manifestación artística, expresiva, de percepción visual en la cual el individuo crea y recrea mundos naturales o fantásticos mediante elementos materiales utilizando diversas técnicas que le permiten expresar sus sentimientos, emociones y percepciones del mundo que lo rodea.</p>
      </div>

      </div>
      <button class="carrusel-btn derecha">&#10095;</button>
    </div>
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