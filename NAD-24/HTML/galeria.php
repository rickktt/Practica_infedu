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
  <title>Galeria de Obras</title>
  <link rel="stylesheet" href="../CSS/galeria.css">
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body class="background">
   
    <?php
    include("../HTML/navbar.php");
    ?>
  <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/galeria.php'">
    <img src="../MEDIA/IMG/estados unidos.png" alt="estados unidos">
  </button>
  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
  </button>
  <!-- GALERÍA -->
  <section class="galeria-section">
    <h1>Galería de Arte</h1>
    <hr>
    <div class="divider"></div>
    <div class="galeria-grid">
          <!-- OBRAS DE ARTE-->
          <div class="obra">
              <img src="../MEDIA/IMG/NocheEstrellada1.jpg" alt="Obra la Noche Estrellada">
              <div class="obra-info">
                <h3>LA NOCHE ESTRELLADA</h3>
                <p>| <b>Vincent Van Gogh</b></p>
                <p><b>Ubicación:</b> Museo de Arte Moderno, NY</p>
                <p><b>Año:</b> 1889</p>
                <p>Destaca por sus contrastes y significado.</p>
              </div>
          </div>

           <div class="obra">
              <img src="../MEDIA/IMG/PersistenciaMemoria.jpg" alt="Obra Persistenciaa de la Memoria">
              <div class="obra-info">
                <h3>LA PERSISTENCIA DE LA MEMORIA</h3>
                <p>| <b>Salvador Dalí</b></p>
                <p><b>Ubicación:</b> Museo de Arte Moderno, NY</p>
                <p><b>Año:</b> 1931</p>
                <p>Revela la distorsión del tiempo y la realidad.</p>
              </div>
            </div>

            <div class="obra">
              <img src="../MEDIA/IMG/Grito.jpg" alt="Obra El Grito">
              <div class="obra-info">
                <h3>EL GRITO</h3>
                <p>| <b>Edvard Munch</b></p>
                <p><b>Ubicación:</b> Galería Nacional, Oslo</p>
                <p><b>Año:</b> 1893</p>
                <p>Angustia y desesperación existencial.</p>
              </div>
            </div>

            <div class="obra">
              <img src="../MEDIA/IMG/capilla1.jpg" alt="Capilla Sixtina">
              <div class="obra-info">
                <h3>CAPILLA SIXTINA</h3>
                <p>| <b>Miguel Ángel</b></p>
                <p><b>Ubicación:</b> Ciudad del Vaticano</p>
                <p><b>Año:</b> 1508–1512</p>
                <p>Incluye "La Creación de Adán".</p>
              </div>
            </div>

            <div class="obra">
              <img src="../MEDIA/IMG/MONA-LISA.jpg" alt="Obra la Mona Lisa"> 
              <div class="obra-info">
                <h3>LA MONA LISA</h3>
                <p>| <b>Leonardo da Vinci</b></p>
                <p><b>Ubicación:</b> Museo del Louvre</p>
                <p><b>Año:</b> 1503–1506</p>
                <p>Enigmática sonrisa y claroscuro.</p>
              </div>
            </div>


            <div class="obra">
              <img src="../MEDIA/IMG/la perla.webp" alt="Obra la Joven de Perla">
              <div class="obra-info">
                <h3>LA JOVEN DE LA PERLA</h3>
                <p>| <b>Johannes Vermeer</b></p>
                <p><b>Ubicación:</b> Mauritshuis, La Haya</p>
                <p><b>Año:</b> 1665</p>
                <p>Conocida como "Mona Lisa del Norte".</p>
              </div>
            </div>

            <div class="obra">
            <img src="../MEDIA/IMG/la libertad.jpg" alt="Obra La Libertad guiando al Pueblo">
            <div class="obra-info">
              <h3>LA LIBERTAD GUIANDO AL PUEBLO</h3>
              <p>| <b>Eugène Delacroix</b></p>
              <p><b>Ubicación:</b> Museo del Louvre</p>
              <p><b>Año:</b> 1830</p>
              <p>Símbolo de la revolución francesa.</p>
            </div>
          </div>

          <div class="obra">
              <img src="../MEDIA/IMG/guernica.jpg" alt="Obra Guernica">
              <div class="obra-info">
                <h3>GUERNICA</h3>
                <p>| <b>Pablo Picasso</b></p>
                <p><b>Ubicación:</b> Museo Reina Sofía, Madrid.</p>
                <p><b>Año:</b> 1937</p>
                <p>Denuncia la violencia y el horror de la guerra.</p>
              </div>
            </div>

          <div class="obra">
              <img src="../MEDIA/IMG/nacimiento.jpg" alt="Obra El Nacimiento de Venus">
              <div class="obra-info">
                <h3>EL NACIMIENTO DE VENUS</h3>
                <p>| <b>Sandro Botticelli</b></p>
                <p><b>Ubicación:</b> Galería Uffizi, Florencia.</p>
                <p><b>Año:</b> 1484–1486</p>
                <p>Representa el mito del nacimiento de Venus.</p>
              </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/ultima cena.webp" alt="Obra la Ultima Cena">
            <div class="obra-info">
              <h3>LA ÚLTIMA CENA</h3>
              <p>| <b>Leonardo da Vinci</b></p>
              <p><b>Ubicación:</b> Convento Santa Maria delle Grazie, Milán.</p>
              <p><b>Año:</b> 1495–1498</p>
              <p>Una de las escenas más famosas de la Biblia.</p>
            </div>
          </div>
      
          <div class="obra">
            <img src="../MEDIA/IMG/las meninas.jpg" alt="Obra Las Meninas">
            <div class="obra-info">
              <h3>LAS MENINAS</h3>
              <p>| <b>Diego Velázquez</b></p>
              <p><b>Ubicación:</b> Museo del Prado, Madrid.</p>
              <p><b>Año:</b> 1656</p>
              <p>Juega con la perspectiva y el punto de vista del espectador.</p>
            </div>
          </div>
      
          <div class="obra">
            <img src="../MEDIA/IMG/el beso.jpg" alt="Obra el beso">
            <div class="obra-info">
              <h3>EL BESO</h3>
              <p>| <b>Gustav Klimt</b></p>
              <p><b>Ubicación:</b> Belvedere, Viena.</p>
              <p><b>Año:</b> 1907–1908</p>
              <p>Un icono del modernismo que celebra el amor.</p>
            </div>
          </div>
      
          <div class="obra">
            <img src="../MEDIA/IMG/jardin.png" alt="Obra el jardín de las delicias">
            <div class="obra-info">
              <h3>EL JARDÍN DE LAS DELICIAS</h3>
              <p>| <b>El Bosco</b></p>
              <p><b>Ubicación:</b> Museo del Prado, Madrid.</p>
              <p><b>Año:</b> 1490–1510</p>
              <p>Tríptico que muestra paraíso, pecado y condena.</p>
            </div>
          </div>
      
          <div class="obra">
            <img src="../MEDIA/IMG/venus.jpg" alt="Obra Venus de Urbino">
            <div class="obra-info">
              <h3>VENUS DE URBINO</h3>
              <p>| <b>Tiziano</b></p>
              <p><b>Ubicación:</b> Galería Uffizi, Florencia.</p>
              <p><b>Año:</b> 1534</p>
              <p>Sensualidad y belleza del Renacimiento.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/remeros.jpg" alt="Obra el Almuerzo de los Remeros">
            <div class="obra-info">
              <h3>EL ALMUERZO DE LOS REMEROS</h3>
              <p>| <b>Pierre-Auguste Renoir</b></p>
              <p><b>Ubicación:</b> Colección Phillips, Washington.</p>
              <p><b>Año:</b> 1881</p>
              <p>Celebración de la amistad y el ocio parisino.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/monet.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>IMPRESSION, SUNRISE</h3>
              <p>| <b>Claude Monet</b></p>
              <p><b>Ubicación:</b> Musée Marmottan Monet, París</p>
              <p><b>Año:</b> 1872</p>
              <p> Obra que dio nombre al impresionismo.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/monet2.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>NINFEAS / WATER LILIES</h3>
              <p>| <b>Claude Monet</b></p>
              <p><b>Ubicación:</b> Musée de L'Orangerie, París
              <p><b>Año:</b> c.1915-1926</p>
              <p>  Grandes paneles que evocan jardines acuáticos</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/john.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE HAY WAIN</h3>
              <p>| <b>John Constable</b></p>
              <p><b>Ubicación:</b> National Gallery, Londres</p>
              <p><b>Año:</b> 1821</p>
              <p> Paisaje inglés que destaca la vida rural..</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/turner.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE FIGHTING TEMERAIRE</h3>
              <p>| <b>J. M. W. Turner</b></p>
              <p><b>Ubicación:</b> National Gallery, Londres</p>
              <p><b>Año:</b> 1839</p>
              <p>  Melancolía y luz en el ocaso de un barco.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/hopper.jpg" alt="Obra Hopper">
            <div class="obra-info">
              <h3>NIGHTHAWKS</h3>
              <p>| <b>Edward Hopper</b></p>
              <p><b>Ubicación:</b> Art Institute of Chicago</p>
              <p><b>Año:</b> 1942</p>
              <p> Escena nocturna urbana, soledad y silencio.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/american.jpg" alt="Obra Wood">
            <div class="obra-info">
              <h3>AMERICAN GOTHIC</h3>
              <p>| <b> Grant Wood</b></p>
              <p><b>Ubicación:</b> Art Institute of Chicago</p>
              <p><b>Año:</b> 1830</p>
              <p>  Icono del realismo regional estadounidense.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/jan.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>ARNOLFINI PORTRAIT</h3>
              <p>| <b>Jan van Eyck</b></p>
              <p><b>Ubicación:</b> National Gallery, Londres</p>
              <p><b>Año:</b> 1434</p>
              <p> Detalle y simbolismo en un retrato nupcial.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/school.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>SCHOOL OF ATHENS</h3>
              <p>| <b>Rafael Sanzio</b></p>
              <p><b>Ubicación:</b> Stanza della Segnatura, Vaticano</p>
              <p><b>Año:</b> 1509–1511</p>
              <p> Alegoría del conocimiento y la filosofía.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/barco.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>STORM ON THE SEA OF GALILEE</h3>
              <p>| <b>Rembrandt van Rijn</b></p>
              <p><b>Ubicación:</b> Museo Isabella Stewart Gardner (robada en 1990)</p>
              <p><b>Año:</b> 1633</p>
              <p>  Barco sacudido por la tormenta, dramatismo barroco.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/man.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE SON OF MAN</h3>
              <p>| <b>René Magritte</b></p>
              <p><b>Ubicación:</b> Colección privada / múltiples reproducciones</p>
              <p><b>Año:</b> 1964</p>
              <p> Surrealismo: rostro oculto por una manzana.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/sleep.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE SLEEPING GYPSY</h3>
              <p>| <b>Henri Rousseau</b></p>
              <p><b>Ubicación:</b> Museum of Modern Art, Nueva York</p>
              <p><b>Año:</b> 1897</p>
              <p> Escena onírica y primitivista.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/gustav.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>PORTRAIT OF ADELE BLOCH-BAUER I</h3>
              <p>| <b>Gustav Klimt</b></p>
              <p><b>Ubicación:</b> Neue Galerie, Nueva York</p>
              <p><b>Año:</b> 1907</p>
              <p>  Oro y ornamentación del modernismo vienés.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/mujer silla.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>ARRANGEMENT IN GREY AND BLACK</h3>
              <p>| <b>James McNeill Whistler</b></p>
              <p><b>Ubicación:</b> Musée d'Orsay / otras colecciones</p>
              <p><b>Año:</b> 1871</p>
              <p> Composición sobria y estudio tonal.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/monet3.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE GARDEN AT SAINTE-ADRESSE</h3>
              <p>| <b>Claude Monet</b></p>
              <p><b>Ubicación:</b> Musée d'Orsay, París</p>
              <p><b>Año:</b> 1867</p>
              <p> Paisaje costero y atmósfera impresionista.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/card.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE CARD PLAYERS</h3>
              <p>| <b>Paul Cézanne</b></p>
              <p><b>Ubicación:</b> Colecciones privadas / Musée d'Orsay (varias versiones)</p>
              <p><b>Año:</b> 1890s</p>
              <p>  Estudio sobre la forma y la simplificación.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/dance.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE DANCE</h3>
              <p>| <b>Henri Matisse</b></p>
              <p><b>Ubicación:</b> Hermitage Museum / State Russian Museum (variantes)</p>
              <p><b>Año:</b> 1910</p>
              <p> Color vibrante y movimiento primario.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/olympa.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>OLYMPIA</h3>
              <p>| <b>Édouard Manet</b></p>
              <p><b>Ubicación:</b>  Musée d'Orsay, París</p>
              <p><b>Año:</b> 1863</p>
              <p> Retrato que rompió con convenciones académicas.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/goya.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE THIRD OF MAY 1808</h3>
              <p>| <b>Francisco Goya</b></p>
              <p><b>Ubicación:</b> Museo del Prado, Madrid</p>
              <p><b>Año:</b> 1814</p>
              <p> Crítica a la violencia y la guerra.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/frida.jpg">
            <div class="obra-info">
              <h3>SELF-PORTRAIT WITH THORN NECKLACE</h3>
              <p>| <b>Frida Kahlo</b></p>
              <p><b>Ubicación:</b> Colección privada / museo (varía)</p>
              <p><b>Año:</b> 1940</p>
              <p> Simbolismo personal y dolor transformado en arte.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/frida2.jpeg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE TWO FRIDAS</h3>
              <p>| <b>Frida Kahlo</b></p>
              <p><b>Ubicación:</b>  Museo de Arte Moderno, Ciudad de México</p>
              <p><b>Año:</b> 1939</p>
              <p> Dualidad de identidad y emocionalidad.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/boy.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE BLUE BOY</h3>
              <p>| <b>Thomas Gainsborough</b></p>
              <p><b>Ubicación:</b> The Huntington, California</p>
              <p><b>Año:</b> c.1770</p>
              <p> Retrato emblemático del rococó inglés.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/sunday.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>A SUNDAY AFTERNOON ON THE ISLAND OF LA GRANDE JATTE</h3>
              <p>| <b>Georges Seurat</b></p>
              <p><b>Ubicación:</b> Art Institute of Chicago</p>
              <p><b>Año:</b> 1884–1886</p>
              <p>  Puntillismo y composición social.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/old.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE OLD GUITARIST</h3>
              <p>| <b>Pablo Picasso</b></p>
              <p><b>Ubicación:</b> Art Institute of Chicago</p>
              <p><b>Año:</b> 1903–1904</p>
              <p> Periodo azul: melancolía y figura alargada.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/potato.jpg" alt="Obra Monet">
            <div class="obra-info">
              <h3>THE POTATO EATERS</h3>
              <p>| <b>Vincent van Gogh</b></p>
              <p><b>Ubicación:</b> Van Gogh Museum, Ámsterdam</p>
              <p><b>Año:</b> 1885</p>
              <p> Escena rural y realismo social.</p>
            </div>
          </div>

          <div class="obra">
            <img src="../MEDIA/IMG/lady.jpg" alt="Obra Monet">
              <div class="obra-info">
                <h3>THE LADY OF SHALOTT</h3>
                <p>| <b>John William Waterhouse</b></p>
                <p><b>Ubicación:</b> Tate Britain / colecciones varias</p>
                <p><b>Año:</b> 1888–1905 (variantes)</p>
                <p> Inspirada en la leyenda artúrica, romanticismo tardío.</p>
              </div>
            </div>
          </div>
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