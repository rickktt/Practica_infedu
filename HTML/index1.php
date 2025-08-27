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
    <title>NAD</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
        <script src="../JAVASCRIPT/modalGaleria.js"></script>
        <script src="../JAVASCRIPT/modo.js" ></script>
</head>
<body class="background">
   
    <?php
    include("../HTML/navbar.php");
    ?>
<button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/index1.php'">
    <img src="../MEDIA/IMG/estados unidos.png" alt="estados unidos">
  </button>
  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
  </button>

    <!----EN NAD---->
  <section>
    <div class="contenedor">
        <div>
            <img class="lam" src="../MEDIA/IMG/lamparaI.png" alt="">
        </div>
        <div class="image-column">
            <img class="uno" src="../MEDIA/IMG/Marco2.2.png" alt="">
            <img class="dos" src="../MEDIA/IMG/ARTE.jpg" alt="">
            <p class="letras uno">¿QUÉ ES ARTE?</p>
        </div>
        <div class="image-column1">
            <img class="tres" src="../MEDIA/IMG/Marco2.png" alt="">
            <img class="cuatro" src="../MEDIA/IMG/ArteVER.jpg" alt="">
            <p class="letras tres">¿QUÉ NOS APORTA?</p>
        </div>
        <div class="image-column">
            <img class="cinco" src="../MEDIA/IMG/Marco2.2.png" alt="">
            <img class="seis" src="../MEDIA/IMG/ArteH2.jpg" alt="">
            <p class="letras cinco">BIENVENID@S</p>
        </div>
        <div class="image-column1">
            <img class="siete" src="../MEDIA/IMG/Marco2.png" alt="">
            <img class="ocho" src="../MEDIA/IMG/ArteVER3.jpg" alt="">
            <p class="letras siete">ACERCA DE NAD</p>
        </div>
        <div>
            <img class="lam2" src="../MEDIA/IMG/lamparaD.png" alt="">
        </div>
        <div>
            <img class="poste" src="../MEDIA/IMG/postes4.png" alt="">
            <img class="poste1" src="../MEDIA/IMG/postes4.png" alt="">
        </div>
        <a href="#informacion">
        <div>
          <img class="flechabajo" src="../MEDIA/IMG/flechaBajo2.png" alt="Flecha hacia abajo">
        </div>
      </a>
        <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1 id="modalTitle"></h1>
            <p id="modalText1"></p>
            <p id="modalText2"></p>
            <p id="modalText3"></p>
            <p id="modalText4"></p>
        </div>
        </div>
        <script src="../JAVASCRIPT/modal_index.js"></script>
    </div>

    </section>
    <!----EN NAD---->
    <section id="informacion" class="section2">
        <div class="contenedor-2">
            <div class="text-column2">
                <h1>En NAD encontrarás sobre:</h1>
                <hr>
                <div class="felcha-1">
                <h2>Artes Visuales</h2>
                <a href="../HTML/register.php"><img class="felcha" src="../MEDIA/IMG/flecha2.png" alt=""></a>
                </div>
                <p>Las artes visuales pueden ser tanto tradicionales como contemporáneas, y abarcan una amplia gama de estilos, técnicas y enfoques creativos.</p>
                <p>La denominación “artes visuales” surge después de la II Guerra Mundial, con las corrientes vanguardistas del siglo XX, que entrelazan disciplinas tradicionales de las bellas artes.</p>
            </div>
            <div class="img-art" >
                <img class="nueve" src="../MEDIA/IMG/Caballete2.png" alt="">
                <img class="diez" src="../MEDIA/IMG/ARTESVISUALES.jpg" alt="Representación de las Artes Visuales">
            </div>
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

<!--Frase Diaria-->
    <section class="section3">
        <h1>Frase Diaria</h1>
        <hr>
        <div class="frase" id="fraseContainer">
            <div class="divider2"></div>
            <img class="image-frase" id="fraseImagen" src="" alt="Imagen del autor">
            <div class="text-frase">
                <p id="fraseTexto">Cargando frase...</p>
                <p id="fraseAutor"></p>
            </div>
            <div class="divider2"></div>
        </div>
        <script src="../JAVASCRIPT/frasediaria.js"></script>
    </section>

<!--Explora Nuevo Arte-->
    <section>
        <h1> Explora un nuevo Arte</h1>
        <hr>
        <div class="newart">
            <div class="text-newart">
                <p>¿No sabes con qué arte comenzar?</p>
                <p>¿O cuál se adapta mejor a tu estilo, personalidad o interés?</p>
                <p>🖌️¡No te preocupes!</p>
                <p>Responde unas preguntas rápidas y déjate guiar hacia un nuevo tipo de arte.</p>
                <p> 🎨 Haz <a href="../HTML/preguntas.php">click aqui</a> y descubre un nuevo arte..</p>
            </div>
            <div class="img-newart">
                <img src="../MEDIA/IMG/nuevoArte.png" alt="Paleta con pinturas representando un nuevo arte">
            </div>
        </div>
    </section>

<!---OBRAAAAAAAAS-->
<section class="galeria-section">
  <h1>Galería de Arte</h1>
  <hr>

  <div class="galeria-grid">

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Marco">
      <img class="obra" src="../MEDIA/IMG/NocheEstrellada1.jpg" alt="La Noche Estrellada">
      <div class="letrero">
        <span data-title="LA NOCHE ESTRELLADA"
              data-autor="Vincent Van Gogh"
              data-ubicacion="Museo de Arte Moderno, NY"
              data-anio="1889"
              data-desc="Destaca por sus contrastes y significado.">LA NOCHE ESTRELLADA</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="LA NOCHE ESTRELLADA"
             data-autor="Vincent Van Gogh"
             data-ubicacion="Museo de Arte Moderno, NY"
             data-anio="1889"
             data-desc="Destaca por sus contrastes y significado."
             alt="Ver detalles">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Marco">
      <img class="obra" src="../MEDIA/IMG/PersistenciaMemoria.jpg" alt="La Persistencia de la Memoria">
      <div class="letrero">
        <span data-title="LA PERSISTENCIA DE LA MEMORIA"
              data-autor="Salvador Dalí"
              data-ubicacion="Museo de Arte Moderno, NY"
              data-anio="1931"
              data-desc="Revela la distorsión del tiempo y la realidad.">LA PERSISTENCIA DE LA MEMORIA</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="LA PERSISTENCIA DE LA MEMORIA"
             data-autor="Salvador Dalí"
             data-ubicacion="Museo de Arte Moderno, NY"
             data-anio="1931"
             data-desc="Revela la distorsión del tiempo y la realidad."
             alt="Ver detalles">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Marco">
      <img class="obra" src="../MEDIA/IMG/Guernica.jpg" alt="Guernica">
      <div class="letrero">
        <span data-title="GUERNICA"
              data-autor="Pablo Picasso"
              data-ubicacion="Museo Reina Sofía, Madrid"
              data-anio="1937"
              data-desc="Denuncia la violencia y el horror de la guerra.">GUERNICA</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="GUERNICA"
             data-autor="Pablo Picasso"
             data-ubicacion="Museo Reina Sofía, Madrid"
             data-anio="1937"
             data-desc="Denuncia la violencia y el horror de la guerra."
             alt="Ver detalles">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Marco">
      <img class="obra" src="../MEDIA/IMG/Grito.jpg" alt="El Grito">
      <div class="letrero">
        <span data-title="EL GRITO"
              data-autor="Edvard Munch"
              data-ubicacion="Galería Nacional, Oslo"
              data-anio="1893"
              data-desc="Angustia y desesperación existencial.">EL GRITO</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="EL GRITO"
             data-autor="Edvard Munch"
             data-ubicacion="Galería Nacional, Oslo"
             data-anio="1893"
             data-desc="Angustia y desesperación existencial."
             alt="Ver detalles">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Marco">
      <img class="obra" src="../MEDIA/IMG/las meninas.jpg" alt="Las Meninas">
      <div class="letrero">
        <span data-title="LAS MENINAS"
              data-autor="Diego Velázquez"
              data-ubicacion="Museo del Prado, Madrid"
              data-anio="1656"
              data-desc="Juega con la perspectiva y el punto de vista del espectador.">LAS MENINAS</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="LAS MENINAS"
             data-autor="Diego Velázquez"
             data-ubicacion="Museo del Prado, Madrid"
             data-anio="1656"
             data-desc="Juega con la perspectiva y el punto de vista del espectador."
             alt="Ver detalles">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Marco">
      <img class="obra" src="../MEDIA/IMG/venus.jpg" alt="El Nacimiento de Venus">
      <div class="letrero">
        <span data-title="EL NACIMIENTO DE VENUS"
              data-autor="Sandro Botticelli"
              data-ubicacion="Galería Uffizi, Florencia"
              data-anio="1484—1486"
              data-desc="Representa el mito del nacimiento de Venus.">EL NACIMIENTO DE VENUS</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="EL NACIMIENTO DE VENUS"
             data-autor="Sandro Botticelli"
             data-ubicacion="Galería Uffizi, Florencia"
             data-anio="1484—1486"
             data-desc="Representa el mito del nacimiento de Venus."
             alt="Ver detalles">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Marco">
      <img class="obra" src="../MEDIA/IMG/ultima cena.webp" alt="La Última Cena">
      <div class="letrero">
        <span data-title="LA ÚLTIMA CENA"
              data-autor="Leonardo da Vinci"
              data-ubicacion="Convento Santa Maria delle Grazie, Milán"
              data-anio="1495—1498"
              data-desc="Una de las escenas más famosas de la Biblia.">LA ÚLTIMA CENA</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="LA ÚLTIMA CENA"
             data-autor="Leonardo da Vinci"
             data-ubicacion="Convento Santa Maria delle Grazie, Milán"
             data-anio="1495—1498"
             data-desc="Una de las escenas más famosas de la Biblia."
             alt="Ver detalles">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Marco">
      <img class="obra" src="../MEDIA/IMG/capilla1.jpg" alt="Capilla Sixtina">
      <div class="letrero">
        <span data-title="CAPILLA SIXTINA"
              data-autor="Miguel Ángel"
              data-ubicacion="Ciudad del Vaticano"
              data-anio="1508—1512"
              data-desc="Incluye 'La Creación de Adán'.">CAPILLA SIXTINA</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="CAPILLA SIXTINA"
             data-autor="Miguel Ángel"
             data-ubicacion="Ciudad del Vaticano"
             data-anio="1508—1512"
             data-desc="Incluye 'La Creación de Adán'."
             alt="Ver detalles">
      </div>
    </div>
  </div>
</section>

<div id="obraModal" class="modal">
  <div class="modal-content1">
    <span class="close1">&times;</span>
    <img id="modal-img" src="" alt="Obra de arte">
    <div class="modal-texto">
      <h2 id="modal-title"></h2>
      <p><b>Autor:</b> <span id="modal-autor"></span></p>
      <p><b>Ubicación:</b> <span id="modal-ubicacion"></span></p>
      <p><b>Año:</b> <span id="modal-anio"></span></p>
      <p id="modal-desc"></p>
    </div>
  </div>
</div>

<!---TIP DEL DÍA--->
    <section>
        <h1>Tip del día</h1>
        <hr>
        <div class="column-left">
            <div class="imgtip">
                <img src="../MEDIA/IMG/TIP.jpg" alt="Ejemplificación de como comenzar un dibujo">
            </div>
            <div class="text-tip">
                <p>A muchos nos pasa que empezamos a dibujar súper emocionados, y de una vamos directo a los detalles… pero luego te das cuenta de que los ojos quedaron chuecos, la nariz torcida o que un pie casi sale del papel.</p>
                <p> Por eso, lo mejor es empezar con lo más básico: 
                <br><b>Una estructura general.</b>
                <br>En la cual comienzas con formas básicas en las que cuadren las proporciones y definas el espacio de tu papel o dibujo.Ya luego podras continuar con sombras y detalles. Te ahorra tiempo, frustraciones, estrés... ¡y papel! </p>
            </div>
        </div>
    </section>

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