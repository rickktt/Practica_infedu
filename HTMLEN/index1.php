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
    <title>NAD</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
    <script src="../JAVASCRIPT/modalGaleria.js"></script>
    <script src="../JAVASCRIPT/modo.js"></script>
</head>
<body class="background">

    <?php
    include("../HTMLEN/navbar.php");
    ?>
<button class="theme-toggle-left" onclick="window.location.href='../HTML/index1.php'">
 <img src="../MEDIA/IMG/españa.png" alt="estados unidos">
 <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
        <span class="theme-icon sun-icon">☀️</span>
        <span class="theme-icon moon-icon">🌙</span>
    </button>
</button>
    <!----IN NAD---->
<section>
    <div class="contenedor">
        <div>
            <img class="lam" src="../MEDIA/IMG/lamparaI.png" alt="">
        </div>
        <div class="image-column">
            <img class="uno" src="../MEDIA/IMG/Marco2.2.png" alt="">
            <img class="dos" src="../MEDIA/IMG/ARTE.jpg" alt="">
            <p class="letras uno">WHAT IS ART?</p>
        </div>
        <div class="image-column1">
            <img class="tres" src="../MEDIA/IMG/Marco2.png" alt="">
            <img class="cuatro" src="../MEDIA/IMG/ArteVER.jpg" alt="">
            <p class="letras tres">WHAT DOES IT GIVE US?</p>
        </div>
        <div class="image-column">
            <img class="cinco" src="../MEDIA/IMG/Marco2.2.png" alt="">
            <img class="seis" src="../MEDIA/IMG/ArteH2.jpg" alt="">
            <p class="letras cinco">WELCOME</p>
        </div>
        <div class="image-column1">
            <img class="siete" src="../MEDIA/IMG/Marco2.png" alt="">
            <img class="ocho" src="../MEDIA/IMG/ArteVER3.jpg" alt="">
            <p class="letras siete">ABOUT NAD</p>
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

<!----IN NAD---->
<section id="informacion" class="section2">
    <div class="contenedor-2">
        <div class="text-column2">
            <h1>At NAD you will find information about:</h1>
            <hr>
            <div class="felcha-1">
                <h2>Visual Arts</h2>
                <a href="../HTMLEN/register.php"><img class="felcha" src="../MEDIA/IMG/flecha2.png" alt=""></a>
            </div>
            <p>Visual arts can be both traditional and contemporary, covering a wide range of styles, techniques, and creative approaches.</p>
            <p>The term “visual arts” emerged after World War II, with the avant-garde movements of the 20th century that intertwined traditional fine art disciplines.</p>
        </div>
        <div class="img-art">
            <img class="nueve" src="../MEDIA/IMG/Caballete2.png" alt="">
            <img class="diez" src="../MEDIA/IMG/ARTESVISUALES.jpg" alt="Representation of Visual Arts">
        </div>
    </div>
</section>

<!----CLASSIFICATION visual arts---->
<section class="clasificacion-artes"> 
  <div class="contenedor-clasificacion">

    <div class="carrusel-container">  
      <button class="carrusel-btn izquierda">&#10094;</button> 
      <div class="carrusel"> 
        
        <div class="tarjeta"> 
          <img src="../MEDIA/IMG/ARTESPLASTICAS.jpg" alt="Visual Arts"> 
          <h2>Visual Arts</h2> 
          <p>Arts that use moldable or manipulable materials in their creation process.</p> 
          <p><em>Painting, Drawing, Sculpture...</em></p> 
          <a href="../HTML/artesPlasticas.php" class="boton-vermas">See more</a> 
        </div> 
          
        <div class="tarjeta"> 
          <img src="../MEDIA/IMG/ARTESPOPULARES.jpeg" alt="Folk Arts"> 
          <h2>Folk Arts</h2> 
          <p>Cultural and artistic expressions that are part of the traditions of communities.</p> 
          <p><em>Weaving, Pottery, Handicrafts...</em></p> 
          <a href="../HTML/artesPopulares.php" class="boton-vermas">See more</a> 
        </div> 
          
        <div class="tarjeta"> 
          <img src="../MEDIA/IMG/ARTESGRAFICas.jpg" alt="Graphic Arts"> 
          <h2>Graphic Arts</h2> 
          <p>Techniques that create visual elements through drawing and digital methods.</p> 
          <p><em>Illustration, Typography, Lettering...</em></p> 
          <a href="../HTML/artesGraficas.php" class="boton-vermas">See more</a> 
        </div> 
       
        <div class="tarjeta"> 
          <img src="../MEDIA/IMG/ARTECONTEMPORÁNEO.jpg" alt="Contemporary Art"> 
          <h2>Contemporary Art</h2> 
          <p>Artistic expressions that emerged from the 20th century onwards.</p> 
          <p><em>Digital Art, Conceptual Art, Urban Art...</em></p> 
          <a href="../HTML/arteContemporaneo.php" class="boton-vermas">See more</a> 
        </div> 

      </div> 
      <button class="carrusel-btn derecha">&#10095;</button> 
    </div> 

    <div class="textoClas">
      <h1>Classification of</h1> 
      <h1>Visual Arts</h1>
      <hr>
      <p>Visual arts are an artistic and expressive manifestation of visual perception, in which individuals create and recreate natural or imaginary worlds using material elements and diverse techniques that allow them to express their feelings, emotions, and perceptions of the surrounding world.</p>
    </div>

  </div>
  <script src="../JAVASCRIPT/carrusel-index.js"></script> 
</section>



<!--Daily Quote-->
<section class="section3">
    <h2>**Daily Quote**</h2>
    <div class="frase" id="fraseContainer">
        <div class="divider2"></div>
        <img class="image-frase" id="fraseImagen" src="" alt="Author image">
        <div class="text-frase">
            <p id="fraseTexto">Loading quote...</p>
            <p id="fraseAutor"></p>
        </div>
        <div class="divider2"></div>
    </div>
    <script src="../JAVASCRIPTEN/frasediaria.js"></script>
</section>

<!--Explore New Art-->
<section>
    <h2>Explore a New Art</h2>
    <div class="newart">
        <div class="text-newart">
            <p>Don’t know where to start with art?</p>
            <p>Or which one suits your style, personality, or interest best?</p>
            <p>🖌️ Don’t worry!</p>
            <p>Answer a few quick questions and let yourself be guided to a new type of art.</p>
            <p> 🎨 <a href="../HTMLEN/preguntas.php">Click here</a> and discover a new art...</p>
        </div>
        <div class="img-newart">
            <img src="../MEDIA/IMG/nuevoArte.png" alt="Palette with paints representing new art">
        </div>
    </div>
</section>

<!---ARTWORKS-->
<section class="galeria-section">
  <h1>Art Gallery</h1>
  <hr>

  <div class="galeria-grid">

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Frame">
      <img class="obra" src="../MEDIA/IMG/NocheEstrellada1.jpg" alt="The Starry Night">
      <div class="letrero">
        <span data-title="THE STARRY NIGHT"
              data-autor="Vincent Van Gogh"
              data-ubicacion="Museum of Modern Art, NY"
              data-anio="1889"
              data-desc="Known for its contrasts and meaning.">THE STARRY NIGHT</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="THE STARRY NIGHT"
             data-autor="Vincent Van Gogh"
             data-ubicacion="Museum of Modern Art, NY"
             data-anio="1889"
             data-desc="Known for its contrasts and meaning."
             alt="View details">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Frame">
      <img class="obra" src="../MEDIA/IMG/PersistenciaMemoria.jpg" alt="The Persistence of Memory">
      <div class="letrero">
        <span data-title="THE PERSISTENCE OF MEMORY"
              data-autor="Salvador Dalí"
              data-ubicacion="Museum of Modern Art, NY"
              data-anio="1931"
              data-desc="Reveals the distortion of time and reality.">THE PERSISTENCE OF MEMORY</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="THE PERSISTENCE OF MEMORY"
             data-autor="Salvador Dalí"
             data-ubicacion="Museum of Modern Art, NY"
             data-anio="1931"
             data-desc="Reveals the distortion of time and reality."
             alt="View details">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Frame">
      <img class="obra" src="../MEDIA/IMG/Guernica.jpg" alt="Guernica">
      <div class="letrero">
        <span data-title="GUERNICA"
              data-autor="Pablo Picasso"
              data-ubicacion="Reina Sofía Museum, Madrid"
              data-anio="1937"
              data-desc="Denounces violence and the horrors of war.">GUERNICA</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="GUERNICA"
             data-autor="Pablo Picasso"
             data-ubicacion="Reina Sofía Museum, Madrid"
             data-anio="1937"
             data-desc="Denounces violence and the horrors of war."
             alt="View details">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Frame">
      <img class="obra" src="../MEDIA/IMG/Grito.jpg" alt="The Scream">
      <div class="letrero">
        <span data-title="THE SCREAM"
              data-autor="Edvard Munch"
              data-ubicacion="National Gallery, Oslo"
              data-anio="1893"
              data-desc="Expresses existential anguish and despair.">THE SCREAM</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="THE SCREAM"
             data-autor="Edvard Munch"
             data-ubicacion="National Gallery, Oslo"
             data-anio="1893"
             data-desc="Expresses existential anguish and despair."
             alt="View details">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Frame">
      <img class="obra" src="../MEDIA/IMG/las meninas.jpg" alt="Las Meninas">
      <div class="letrero">
        <span data-title="LAS MENINAS"
              data-autor="Diego Velázquez"
              data-ubicacion="Prado Museum, Madrid"
              data-anio="1656"
              data-desc="Plays with perspective and the viewer’s point of view.">LAS MENINAS</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="LAS MENINAS"
             data-autor="Diego Velázquez"
             data-ubicacion="Prado Museum, Madrid"
             data-anio="1656"
             data-desc="Plays with perspective and the viewer’s point of view."
             alt="View details">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Frame">
      <img class="obra" src="../MEDIA/IMG/venus.jpg" alt="The Birth of Venus">
      <div class="letrero">
        <span data-title="THE BIRTH OF VENUS"
              data-autor="Sandro Botticelli"
              data-ubicacion="Uffizi Gallery, Florence"
              data-anio="1484—1486"
              data-desc="Depicts the myth of the birth of Venus.">THE BIRTH OF VENUS</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="THE BIRTH OF VENUS"
             data-autor="Sandro Botticelli"
             data-ubicacion="Uffizi Gallery, Florence"
             data-anio="1484—1486"
             data-desc="Depicts the myth of the birth of Venus."
             alt="View details">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Frame">
      <img class="obra" src="../MEDIA/IMG/ultima cena.webp" alt="The Last Supper">
      <div class="letrero">
        <span data-title="THE LAST SUPPER"
              data-autor="Leonardo da Vinci"
              data-ubicacion="Convent of Santa Maria delle Grazie, Milan"
              data-anio="1495—1498"
              data-desc="One of the most famous scenes from the Bible.">THE LAST SUPPER</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="THE LAST SUPPER"
             data-autor="Leonardo da Vinci"
             data-ubicacion="Convent of Santa Maria delle Grazie, Milan"
             data-anio="1495—1498"
             data-desc="One of the most famous scenes from the Bible."
             alt="View details">
      </div>
    </div>

    <div class="cuadro">
      <img class="marco" src="../MEDIA/IMG/Marco3.png" alt="Frame">
      <img class="obra" src="../MEDIA/IMG/capilla1.jpg" alt="Sistine Chapel">
      <div class="letrero">
        <span data-title="SISTINE CHAPEL"
              data-autor="Michelangelo"
              data-ubicacion="Vatican City"
              data-anio="1508—1512"
              data-desc="Includes 'The Creation of Adam'.">SISTINE CHAPEL</span>
        <img src="../MEDIA/IMG/pincel.png" class="pincel"
             data-title="SISTINE CHAPEL"
             data-autor="Michelangelo"
             data-ubicacion="Vatican City"
             data-anio="1508—1512"
             data-desc="Includes 'The Creation of Adam'."
             alt="View details">
      </div>
    </div>
  </div>
</section>

<div id="obraModal" class="modal">
  <div class="modal-content1">
    <span class="close1">&times;</span>
    <img id="modal-img" src="" alt="Artwork">
    <div class="modal-texto">
      <h2 id="modal-title"></h2>
      <p><b>Author:</b> <span id="modal-autor"></span></p>
      <p><b>Location:</b> <span id="modal-ubicacion"></span></p>
      <p><b>Year:</b> <span id="modal-anio"></span></p>
      <p id="modal-desc"></p>
    </div>
  </div>
</div>

<!--TIP OF THE DAY-->
<section>
    <h2>Tip of the Day</h2>
    <div class="column-left">
        <div class="imgtip">
            <img src="../MEDIA/IMG/TIP.jpg" alt="Example of how to start a drawing">
        </div>
        <div class="text-tip">
            <p>Many of us start drawing super excited and go straight into the details… but then realize the eyes are crooked, the nose is off, or a foot is almost off the paper.</p>
            <p> That’s why it’s best to start with the basics: 
            <br><b>A general structure.</b>
            <br>Start with basic shapes to match proportions and define your paper space. Then move on to shadows and details. It saves time, frustration, stress... and paper! </p>
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
                <img class="icon" src="../MEDIA/IMG/instagram.png" alt="Instagram logo">
                </a>
                <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                <img class="icon" src="../MEDIA/IMG/facebook.png" alt="Facebook logo">
                </a>
                <a href="https://www.twitter.com" target="_blank" aria-label="Twitter">
                <img class="icon" src="../MEDIA/IMG/x.png" alt="Twitter logo">
                </a>
            </div>
        </div>
    </div>
    <div class="footer-column">
        <h4>Options</h4>
        <p>Visual Arts</p>
        <p>Fine Arts</p>
        <p>Graphic Arts</p>
        <p>Folk Arts</p>
        <p>Contemporary Art</p>
    </div>
    <div class="footer-column">
        <h4>Legal Notice</h4>
        <p>Privacy Policy</p>
        <p>Terms of Service</p>
        <p>Contact Us</p>
    </div>
</footer>
</body>
</html>
