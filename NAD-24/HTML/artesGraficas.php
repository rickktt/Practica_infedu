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
  <link rel="stylesheet" href="../CSS/artesGraficas.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/DarkMode">
</head>

<body class="background">

  <?php
  include("../HTML/navbar.php");
  ?>
  <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/artesGraficas.php'">
    <img src="../MEDIA/IMG/estados unidos.png" alt="estados unidos">
  </button>
  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
  </button>
  <section class="section2">
    <h1>Artes graficas</h1>
    <hr>

    <main>
      <div class="texto">
        <p>Las Artes Gráficas son un conjunto de técnicas y procesos que se utilizan para crear y producir imágenes y
          elementos visuales, principalmente para su reproducción en masa, como en la impresión.</p> <br>

        <!-- Contenido oculto -->
        <div class="extra" id="contenidoExtra">
          <p>Incluyen técnicas como el grabado, la litografía, la serigrafía, el diseño gráfico y la impresión digital,
            con el objetivo de comunicar mensajes visualmente.</p><br>
          <p>Las artes gráficas sirven para crear imágenes y textos que se pueden usar tanto en impresión como en medios
            digitales para la comunicación y publicidad. Esto incluye una amplia gama de técnicas y procesos, desde
            técnicas tradicionales como el grabado y el dibujo hasta métodos modernos relacionados con la imprenta y las
            herramientas digitales. </p><br>
          <p>Se utilizan para crear diseños, logotipos, carteles, empaques, envases, etiquetas, ropa,y mucho más.</p>
        </div>

        <!-- Botón ver más -->
        <button class="ver-mas-btn" onclick="mostrarContenido()">Ver más</button>
      </div>

      <div class="caja-lateral">
        <img src="../MEDIA/IMG/graficas.jpg">
        <p>Las artes gráficas destacan por su versatilidad y capacidad de comunicar mensajes de forma visual, siendo
          fundamentales en la publicidad, el diseño gráfico y la expresión artística.</p>
      </div>
    </main>
    <script src="../JAVASCRIPT/vermas.js"></script>
  </section>



  <section class="section">
    <h1>Más acerca de las Artes Gráficas</h1>
    <hr>
    <div class="img-container">
      <img src="../MEDIA/IMG/graficas2.jpg">
    </div>

    <div class="text-container">
      <p>Este término se comenzó a emplear tras la invención de la imprenta. Así, se agrupaban todos los oficios
        relacionados con la impresión tipográfica como la impresión, la encuadernación, etc.</p>
      <p>En la actualidad podemos incluir la impresión digital en este término debido al gran desarrollo tecnológico que
        se ha producido a lo largo de los últimos años.</p>
      <p>Las Artes Gráficas se emplean como un medio de difusión publicitaria, aplicándose distintas técnicas ya sea en
        rótulos y carteles como en envases y cajas, recipientes, etiquetas, páginas web, etc.</p>
    </div>
  </section>

  <section class="estetica-section">
    <div class="columna-izquierda">
      <h2>Dibujo</h2>
      <ul>
        <li>Permite la representación de objetos, conceptos y emociones, utilizando líneas, formas y sombras. El dibujo
          puede ser realizado a mano alzada, digitalmente o utilizando otras técnicas.</li>
      </ul>
      <img src="../MEDIA/IMG/dibujo.jpg" width="250" alt="arte contemporáneo">
    </div>

    <div class="columna-derecha">
      <h2>Tipos de artes gráficas</h2>
      <ul>
        <li>El dibujo es una herramienta esencial para la creación de diseños y la comunicación visual.
          En las artes gráficas, el dibujo se utiliza para:</li><br>
        <li><b>1:</b>Crear bocetos y diseños: El dibujo se utiliza como un paso previo a la creación de obras finales.
        </li><br>
        <li><b>2:</b>Realizar ilustraciones: Dibujos que complementan textos en libros, revistas y otros materiales.
        </li><br>
        <li><b>3:</b>Diseñar logotipos y gráficos: Creación de elementos visuales para marcas y empresas. </li><br>
        <li><b>4:</b>Crear ilustraciones digitales: Utilización de software para la creación de imágenes digitales.
        </li>
      </ul>
    </div>
  </section>

  <section class="seccion-arte">
    <div class="texto-izquierda">
      <h2>ilustración</h2>
      <p>La ilustración es una forma específica de arte gráfico que consiste en la creación de imágenes (dibujos,
        pinturas, grabados, etc.) para complementar, narrar, o ilustrar un texto, un mensaje, o un concepto.</p>
      <p>Su objetivo principal es la comunicación visual, ya sea para clarificar un texto, crear un ambiente, o expresar
        una idea. </p>
      <p><b>Técnicas:</b>Puede utilizar diversas técnicas, incluyendo dibujo a mano, pintura, grabado, impresión
        digital, y técnicas mixtas. </p>
      <p><b>Aplicaciones:</b>Se utiliza en una amplia variedad de contextos, como libros infantiles, revistas,
        publicidad, diseño web, videojuegos, ilustración científica, y mucho más. </p>
    </div>
    <div class="imagen-central">
      <img src="../MEDIA/IMG/ilustracionn.jpg" alt="Para que sirven las artes contemporaneas">
      <p>La ilustración puede ser parte de un proyecto gráfico más amplio, como la creación de un libro ilustrado, la
        publicidad de un producto, o el diseño de un sitio web.</p>
    </div>
  </section>



  <!----CLASIFICACIÓN artes visuales---->
  <section class="titulo">
    <h1>Clasificación de las Artes Visuales</h1>
    <hr>
    <div class="tarjetas">
      <div class="tarjeta">
        <img src="../MEDIA/IMG/manga.comic.webp" alt="Representación de las Artes Plásticas">
        <h1>Manga/Cómic</h1>
        <p><b>El manga</b> es un término que se refiere a los cómics y novelas gráficas producidos en Japón, y se
          caracteriza por su estilo artístico único y su lectura de derecha a izquierda. </p>
        <p>El manga también ha sido adaptado a otros medios, como el anime y el cine, lo que ha ampliado su alcance y su
          influencia en la cultura popular. </p>
        <p><b>El cómic</b> es una forma de arte gráfica que utiliza imágenes y texto para contar historias. Es una forma
          de narrativa visual que combina el arte con la literatura, creando una experiencia única para el lector.</p>
        <a href="../HTML/artesPlasticas.php" class="boton-vermas">Ver más</a>
      </div>
      <div class="tarjeta">
        <img src="../MEDIA/IMG/afiche.cartel.webp" alt="Representación de las Artes Populares">
        <h1>Carteles/Afiches</h1>
        <p><b>Los carteles</b> son una forma fundamental de las artes gráficas, utilizados para comunicar mensajes de
          manera visual y atractiva. </p>
        <p>Se caracterizan por ser impactantes y persuasivos, buscando captar la atención del público y transmitir una
          idea o mensaje de forma clara y concisa. </p>
        <p><b>El Afiche</b> es una pieza visual que se utiliza para comunicar información o promocionar algo de manera
          efectiva. </p>
        <p>Es una composición que combina imagen y texto, con el objetivo de captar la atención del público y transmitir
          un mensaje específico. </p>
        <a href="../HTML/artesPopulares.php" class="boton-vermas">Ver más</a>
      </div>
      <div class="tarjeta">
        <img src="../MEDIA/IMG/caligrafia.jpg" alt="Representación del Arte Contemporáneo">
        <h1>Caligrafía/Lettering</h1>
        <p><b>La Caligrafía</b> es el arte de escribir letras de forma artística, utilizando herramientas como plumillas
          o pinceles, para crear trazos fluidos y rítmicos.
          En artes gráficas:Se utiliza para crear letras decorativas en diseños como logotipos, rótulos o títulos,
          buscando un impacto visual y la expresión de un mensaje. </p>
        <p><b>Ejemplo</b>Se puede utilizar para la creación de logotipos, títulos en revistas o periódicos, rótulos de
          tiendas o incluso en la creación de obras de arte visual. </p>
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