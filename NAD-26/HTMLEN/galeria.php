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
  <title>Art Gallery</title>
  <link rel="stylesheet" href="../CSS/galeria.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/DarkMode.css">
  <link rel="stylesheet" href="../CSS/nav.css">
</head>

<body class="background">

  <?php
  include("../HTMLEN/nav1.php");
  ?>
  <button class="theme-toggle-left" onclick="window.location.href='../HTML/galeria.php'">
    <img src="../MEDIA/IMG/españa.png" alt="estados unidos">
    <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
      <span class="theme-icon sun-icon">☀️</span>
      <span class="theme-icon moon-icon">🌙</span>
    </button>
    <!-- GALLERY -->
    <section></section>
    <section class="galeria-section">
      <h1>Art Gallery</h1>
      <hr>
      <div class="divider"></div>
      <div class="galeria-grid">

        <!-- ARTWORKS -->
        <div class="obra">
            <img src="../MEDIA/IMG/NocheEstrellada1.jpg" alt="The Starry Night">
            <div class="obra-info">
              <h3>THE STARRY NIGHT</h3>
              <p>| <b>Vincent Van Gogh</b></p>
              <p><b>Location:</b> Museum of Modern Art, NY</p>
              <p><b>Year:</b> 1889</p>
              <p>Known for its contrasts and meaning.</p>
            </div>
        </div>

        <div class="obra">
            <img src="../MEDIA/IMG/PersistenciaMemoria.jpg" alt="The Persistence of Memory">
            <div class="obra-info">
              <h3>THE PERSISTENCE OF MEMORY</h3>
              <p>| <b>Salvador Dalí</b></p>
              <p><b>Location:</b> Museum of Modern Art, NY</p>
              <p><b>Year:</b> 1931</p>
              <p>Reveals the distortion of time and reality.</p>
            </div>
        </div>

        <div class="obra">
            <img src="../MEDIA/IMG/Grito.jpg" alt="The Scream">
            <div class="obra-info">
              <h3>THE SCREAM</h3>
              <p>| <b>Edvard Munch</b></p>
              <p><b>Location:</b> National Gallery, Oslo</p>
              <p><b>Year:</b> 1893</p>
              <p>Anguish and existential despair.</p>
            </div>
        </div>

        <div class="obra">
            <img src="../MEDIA/IMG/capilla1.jpg" alt="Sistine Chapel">
            <div class="obra-info">
              <h3>SISTINE CHAPEL</h3>
              <p>| <b>Michelangelo</b></p>
              <p><b>Location:</b> Vatican City</p>
              <p><b>Year:</b> 1508–1512</p>
              <p>Includes "The Creation of Adam".</p>
            </div>
        </div>

        <div class="obra">
            <img src="../MEDIA/IMG/MONA-LISA.jpg" alt="Mona Lisa"> 
            <div class="obra-info">
              <h3>MONA LISA</h3>
              <p>| <b>Leonardo da Vinci</b></p>
              <p><b>Location:</b> Louvre Museum</p>
              <p><b>Year:</b> 1503–1506</p>
              <p>Enigmatic smile and chiaroscuro.</p>
            </div>
        </div>

        <div class="obra">
            <img src="../MEDIA/IMG/la perla.webp" alt="Girl with a Pearl Earring">
            <div class="obra-info">
              <h3>GIRL WITH A PEARL EARRING</h3>
              <p>| <b>Johannes Vermeer</b></p>
              <p><b>Location:</b> Mauritshuis, The Hague</p>
              <p><b>Year:</b> 1665</p>
              <p>Known as the "Mona Lisa of the North".</p>
            </div>
        </div>

        <div class="obra">
            <img src="../MEDIA/IMG/la libertad.jpg" alt="Liberty Leading the People">
            <div class="obra-info">
              <h3>LIBERTY LEADING THE PEOPLE</h3>
              <p>| <b>Eugène Delacroix</b></p>
              <p><b>Location:</b> Louvre Museum</p>
              <p><b>Year:</b> 1830</p>
              <p>Symbol of the French Revolution.</p>
            </div>
        </div>

        <div class="obra">
            <img src="../MEDIA/IMG/guernica.jpg" alt="Guernica">
            <div class="obra-info">
              <h3>GUERNICA</h3>
              <p>| <b>Pablo Picasso</b></p>
              <p><b>Location:</b> Reina Sofía Museum, Madrid</p>
              <p><b>Year:</b> 1937</p>
              <p>Denounces violence and the horrors of war.</p>
            </div>
        </div>

        <div class="obra">
            <img src="../MEDIA/IMG/nacimiento.jpg" alt="The Birth of Venus">
            <div class="obra-info">
              <h3>THE BIRTH OF VENUS</h3>
              <p>| <b>Sandro Botticelli</b></p>
              <p><b>Location:</b> Uffizi Gallery, Florence</p>
              <p><b>Year:</b> 1484–1486</p>
              <p>Represents the myth of Venus' birth.</p>
            </div>
        </div>

        <div class="obra">
            <img src="../MEDIA/IMG/ultima cena.webp" alt="The Last Supper">
            <div class="obra-info">
              <h3>THE LAST SUPPER</h3>
              <p>| <b>Leonardo da Vinci</b></p>
              <p><b>Location:</b> Convent of Santa Maria delle Grazie, Milan</p>
              <p><b>Year:</b> 1495–1498</p>
              <p>One of the most famous Biblical scenes.</p>
            </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/las meninas.jpg" alt="Las Meninas">
          <div class="obra-info">
            <h3>LAS MENINAS</h3>
            <p>| <b>Diego Velázquez</b></p>
            <p><b>Location:</b> Prado Museum, Madrid</p>
            <p><b>Year:</b> 1656</p>
            <p>Plays with perspective and the viewer's point of view.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/el beso.jpg" alt="The Kiss">
          <div class="obra-info">
            <h3>THE KISS</h3>
            <p>| <b>Gustav Klimt</b></p>
            <p><b>Location:</b> Belvedere, Vienna</p>
            <p><b>Year:</b> 1907–1908</p>
            <p>An icon of modernism celebrating love.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/jardin.png" alt="The Garden of Earthly Delights">
          <div class="obra-info">
            <h3>THE GARDEN OF EARTHLY DELIGHTS</h3>
            <p>| <b>Hieronymus Bosch</b></p>
            <p><b>Location:</b> Prado Museum, Madrid</p>
            <p><b>Year:</b> 1490–1510</p>
            <p>Triptych showing paradise, sin, and damnation.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/venus.jpg" alt="Venus of Urbino">
          <div class="obra-info">
            <h3>VENUS OF URBINO</h3>
            <p>| <b>Titian</b></p>
            <p><b>Location:</b> Uffizi Gallery, Florence</p>
            <p><b>Year:</b> 1534</p>
            <p>Sensuality and Renaissance beauty.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/remeros.jpg" alt="Luncheon of the Boating Party">
          <div class="obra-info">
            <h3>LUNCHEON OF THE BOATING PARTY</h3>
            <p>| <b>Pierre-Auguste Renoir</b></p>
            <p><b>Location:</b> Phillips Collection, Washington</p>
            <p><b>Year:</b> 1881</p>
            <p>Celebration of friendship and Parisian leisure.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/monet.jpg" alt="Impression, Sunrise">
          <div class="obra-info">
            <h3>IMPRESSION, SUNRISE</h3>
            <p>| <b>Claude Monet</b></p>
            <p><b>Location:</b> Marmottan Monet Museum, Paris</p>
            <p><b>Year:</b> 1872</p>
            <p>The work that gave Impressionism its name.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/monet2.jpg" alt="Water Lilies">
          <div class="obra-info">
            <h3>WATER LILIES</h3>
            <p>| <b>Claude Monet</b></p>
            <p><b>Location:</b> Musée de l'Orangerie, Paris</p>
            <p><b>Year:</b> c.1915–1926</p>
            <p>Large panels evoking aquatic gardens.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/john.jpg" alt="The Hay Wain">
          <div class="obra-info">
            <h3>THE HAY WAIN</h3>
            <p>| <b>John Constable</b></p>
            <p><b>Location:</b> National Gallery, London</p>
            <p><b>Year:</b> 1821</p>
            <p>English landscape highlighting rural life.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/turner.jpg" alt="The Fighting Temeraire">
          <div class="obra-info">
            <h3>THE FIGHTING TEMERAIRE</h3>
            <p>| <b>J. M. W. Turner</b></p>
            <p><b>Location:</b> National Gallery, London</p>
            <p><b>Year:</b> 1839</p>
            <p>Melancholy and light in a ship's twilight.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/hopper.jpg" alt="Nighthawks">
          <div class="obra-info">
            <h3>NIGHTHAWKS</h3>
            <p>| <b>Edward Hopper</b></p>
            <p><b>Location:</b> Art Institute of Chicago</p>
            <p><b>Year:</b> 1942</p>
            <p>Nighttime urban scene, loneliness, and silence.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/american.jpg" alt="American Gothic">
          <div class="obra-info">
            <h3>AMERICAN GOTHIC</h3>
            <p>| <b>Grant Wood</b></p>
            <p><b>Location:</b> Art Institute of Chicago</p>
            <p><b>Year:</b> 1930</p>
            <p>Icon of American Regionalist realism.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/jan.jpg" alt="Arnolfini Portrait">
          <div class="obra-info">
            <h3>ARNOLFINI PORTRAIT</h3>
            <p>| <b>Jan van Eyck</b></p>
            <p><b>Location:</b> National Gallery, London</p>
            <p><b>Year:</b> 1434</p>
            <p>Detail and symbolism in a nuptial portrait.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/school.jpg" alt="The School of Athens">
          <div class="obra-info">
            <h3>THE SCHOOL OF ATHENS</h3>
            <p>| <b>Raphael</b></p>
            <p><b>Location:</b> Stanza della Segnatura, Vatican</p>
            <p><b>Year:</b> 1509–1511</p>
            <p>Allegory of knowledge and philosophy.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/barco.jpg" alt="Storm on the Sea of Galilee">
          <div class="obra-info">
            <h3>STORM ON THE SEA OF GALILEE</h3>
            <p>| <b>Rembrandt van Rijn</b></p>
            <p><b>Location:</b> Isabella Stewart Gardner Museum (stolen in 1990)</p>
            <p><b>Year:</b> 1633</p>
            <p>A ship shaken by the storm, Baroque drama.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/man.jpg" alt="The Son of Man">
          <div class="obra-info">
            <h3>THE SON OF MAN</h3>
            <p>| <b>René Magritte</b></p>
            <p><b>Location:</b> Private collection / multiple reproductions</p>
            <p><b>Year:</b> 1964</p>
            <p>Surrealism: face hidden by an apple.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/sleep.jpg" alt="The Sleeping Gypsy">
          <div class="obra-info">
            <h3>THE SLEEPING GYPSY</h3>
            <p>| <b>Henri Rousseau</b></p>
            <p><b>Location:</b> Museum of Modern Art, New York</p>
            <p><b>Year:</b> 1897</p>
            <p>Dreamlike and primitivist scene.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/gustav.jpg" alt="Portrait of Adele Bloch-Bauer I">
          <div class="obra-info">
            <h3>PORTRAIT OF ADELE BLOCH-BAUER I</h3>
            <p>| <b>Gustav Klimt</b></p>
            <p><b>Location:</b> Neue Galerie, New York</p>
            <p><b>Year:</b> 1907</p>
            <p>Gold and ornamentation of Viennese modernism.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/mujer silla.jpg" alt="Arrangement in Grey and Black">
          <div class="obra-info">
            <h3>ARRANGEMENT IN GREY AND BLACK</h3>
            <p>| <b>James McNeill Whistler</b></p>
            <p><b>Location:</b> Musée d'Orsay / other collections</p>
            <p><b>Year:</b> 1871</p>
            <p>Sober composition and tonal study.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/monet3.jpg" alt="The Garden at Sainte-Adresse">
          <div class="obra-info">
            <h3>THE GARDEN AT SAINTE-ADRESSE</h3>
            <p>| <b>Claude Monet</b></p>
            <p><b>Location:</b> Musée d'Orsay, Paris</p>
            <p><b>Year:</b> 1867</p>
            <p>Coastal landscape and impressionist atmosphere.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/card.jpg" alt="The Card Players">
          <div class="obra-info">
            <h3>THE CARD PLAYERS</h3>
            <p>| <b>Paul Cézanne</b></p>
            <p><b>Location:</b> Private collections / Musée d'Orsay (various versions)</p>
            <p><b>Year:</b> 1890s</p>
            <p>Study on form and simplification.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/dance.jpg" alt="The Dance">
          <div class="obra-info">
            <h3>THE DANCE</h3>
            <p>| <b>Henri Matisse</b></p>
            <p><b>Location:</b> Hermitage Museum / State Russian Museum (variants)</p>
            <p><b>Year:</b> 1910</p>
            <p>Vibrant color and primal movement.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/olympa.jpg" alt="Olympia">
          <div class="obra-info">
            <h3>OLYMPIA</h3>
            <p>| <b>Édouard Manet</b></p>
            <p><b>Location:</b> Musée d'Orsay, Paris</p>
            <p><b>Year:</b> 1863</p>
            <p>A portrait that broke academic conventions.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/goya.jpg" alt="The Third of May 1808">
          <div class="obra-info">
            <h3>THE THIRD OF MAY 1808</h3>
            <p>| <b>Francisco Goya</b></p>
            <p><b>Location:</b> Prado Museum, Madrid</p>
            <p><b>Year:</b> 1814</p>
            <p>Criticism of violence and war.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/frida.jpg" alt="Self-Portrait with Thorn Necklace">
          <div class="obra-info">
            <h3>SELF-PORTRAIT WITH THORN NECKLACE</h3>
            <p>| <b>Frida Kahlo</b></p>
            <p><b>Location:</b> Private collection / museum (varies)</p>
            <p><b>Year:</b> 1940</p>
            <p>Personal symbolism and pain turned into art.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/frida2.jpeg" alt="The Two Fridas">
          <div class="obra-info">
            <h3>THE TWO FRIDAS</h3>
            <p>| <b>Frida Kahlo</b></p>
            <p><b>Location:</b> Museum of Modern Art, Mexico City</p>
            <p><b>Year:</b> 1939</p>
            <p>Duality of identity and emotion.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/boy.jpg" alt="The Blue Boy">
          <div class="obra-info">
            <h3>THE BLUE BOY</h3>
            <p>| <b>Thomas Gainsborough</b></p>
            <p><b>Location:</b> The Huntington, California</p>
            <p><b>Year:</b> c.1770</p>
            <p>Iconic portrait of English Rococo.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/sunday.jpg" alt="A Sunday Afternoon on the Island of La Grande Jatte">
          <div class="obra-info">
            <h3>A SUNDAY AFTERNOON ON THE ISLAND OF LA GRANDE JATTE</h3>
            <p>| <b>Georges Seurat</b></p>
            <p><b>Location:</b> Art Institute of Chicago</p>
            <p><b>Year:</b> 1884–1886</p>
            <p>Pointillism and social composition.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/old.jpg" alt="The Old Guitarist">
          <div class="obra-info">
            <h3>THE OLD GUITARIST</h3>
            <p>| <b>Pablo Picasso</b></p>
            <p><b>Location:</b> Art Institute of Chicago</p>
            <p><b>Year:</b> 1903–1904</p>
            <p>Blue Period: melancholy and elongated figure.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/potato.jpg" alt="The Potato Eaters">
          <div class="obra-info">
            <h3>THE POTATO EATERS</h3>
            <p>| <b>Vincent van Gogh</b></p>
            <p><b>Location:</b> Van Gogh Museum, Amsterdam</p>
            <p><b>Year:</b> 1885</p>
            <p>Rural scene and social realism.</p>
          </div>
        </div>

        <div class="obra">
          <img src="../MEDIA/IMG/lady.jpg" alt="The Lady of Shalott">
          <div class="obra-info">
            <h3>THE LADY OF SHALOTT</h3>
            <p>| <b>John William Waterhouse</b></p>
            <p><b>Location:</b> Tate Britain / various collections</p>
            <p><b>Year:</b> 1888–1905 (variants)</p>
            <p>Inspired by Arthurian legend, late Romanticism.</p>
          </div>
        </div>


      </div>
    </section>

   <?php
  include("../HTMLEN/footer.php");
  ?>
</body>

</html>