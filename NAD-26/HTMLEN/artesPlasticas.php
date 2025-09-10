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
    <title>Plastic Arts</title>
    <link rel="stylesheet" href="../CSS/artesPlasticas.css">
    <script src="../JAVASCRIPT/modo.js"></script>
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/DarkMode.css">
    <link rel="stylesheet" href="../CSS/nav.css">
</head>

<body class="background">

    <?php
    include("../HTMLEN/nav1.php");
    ?>

    <button class="theme-toggle-left" onclick="window.location.href='../HTML/artesPlasticas.php'">
        <img src="../MEDIA/IMG/españa.png" alt="spain flag">
    </button>
    <button class="theme-toggle" id="themeToggle" aria-label="Change light/dark mode">
        <span class="theme-icon sun-icon">☀️</span>
        <span class="theme-icon moon-icon">🌙</span>
    </button>

    <!-- Intro section -->
    <section class="section2">
        <h1>Plastic Arts</h1>
         <div>
            <img class="lam" src="../MEDIA/IMG/lamparaI.png" alt="">
        </div>
        <div>
            <img class="lam2" src="../MEDIA/IMG/lamparaD.png" alt="">
        </div>
        <hr>
        <main>
            <div class="texto">
                <p>We understand plastic arts as all those arts that use moldable or manipulable materials in their
                    creation process.</p><br>

                <!-- Hidden content -->
                <div class="extra" id="contenidoExtra">
                    <p>The most well-known are painting, sculpture, and architecture, but we can also include
                        drawing, engraving, ceramics, goldsmithing, etc.</p><br>
                    <p><b>OBJECTIVE:</b> to build forms and images that present a vision of the world or reality
                        according to a set of aesthetic values defined by the artist.</p>
                    <p>The term originated in the 19th century to distinguish it from the disciplines that belong to
                        the 7 fine arts.</p>
                </div>

                <!-- See more button -->
                <button class="ver-mas-btn" onclick="mostrarContenido()">See more</button>
            </div>

            <div class="caja-lateral">
                <img src="../MEDIA/IMG/artes-pla-sticas.webp" alt="Plastic arts example">
            </div>
        </main>
        <script src="../JAVASCRIPTEN/vermas.js"></script>
    </section>


    <!-- Characteristics -->
    <section class="section">
        <h1>Characteristics of Plastic Arts</h1>
        <main>
            <div class="img-container">
                <img src="../MEDIA/IMG/artesplasticas2.jpg" alt="Plastic Arts">
            </div>
            <div class="text-container">
                <p>Plastic arts are versatile and very rich artistic expressions. Their main characteristics include:</p>

                <p><strong>Manipulation:</strong> All plastic arts are based on the manipulation of materials, with the
                    aim of offering a creation that reflects the artist's expression. The manipulation of materials
                    can be done using all kinds of tools.</p>

                <p><strong>Expressiveness:</strong> These are works that reflect and express the vision of the artist
                    who created them. Their manifestations often also include elements of a particular culture,
                    movement, or style.</p>

                <p><strong>Technical variety:</strong> The variety of techniques used in plastic arts is comprehensive,
                    as it includes any element capable of modifying or manipulating a material.</p>

                <p>This technical variety brings with it a large number of tools specific to each particular
                    plastic art and, even more so, to each artistic style or movement.</p>
            </div>
        </main>
    </section>


    <!-- Painting -->
    <section class="estetica-section">
        <div class="columna-izquierda">
            <h1>Painting</h1>
            <p>There are different styles and genres of painting, developed throughout history, that include not
                only personal expressions of the artist but also cultural expressions.</p>
            <img src="../MEDIA/IMG/PINTURA.jpg" alt="Painting">
        </div>

        <div class="columna-derecha">
            <h1>Types of Plastic Arts</h1>
            <ul>
                <li>Painting is one of the oldest artistic expressions of humanity. Its origins date back 36,000 years,
                    with the cave paintings found in the Chauvet Cave in France.</li><br>
                <li>It can be done using a wide variety of techniques and materials, such as oil, acrylics,
                    watercolor, or fresco painting, among others.</li><br>
                <li>It is done by applying liquid pigments onto a surface, which can be paper, canvas, wood, fabric,
                    or even stone.</li><br>
                <li>Various tools have been used for painting, such as brushes, spatulas, or even the artist's own
                    fingers.</li>
            </ul>
        </div>
    </section>


    <!-- Sculpture -->
    <section class="section">
        <h1>Sculpture</h1>
        <main>
            <div class="text-container">
                <p>Sculpture is the creation of works in three dimensions from different materials through molding or
                    manipulation.</p>

                <p>It is also one of the oldest arts, practiced since prehistoric times, reaching its peak in Ancient
                    Greece. Western sculpture (as a plastic discipline) bases many of its aesthetic values on what is
                    called classical art.</p>

                <p>Depending on the style and technique used, we can also find several sculptural genres: full-round
                    sculpture, relief, low-relief, wood carving, clay, stone, or metal carving.</p>

                <p>Among the most commonly used materials are wood, stone (notably marble), and metal (such as bronze).
                </p>
            </div>
            <div class="img-container">
                <img src="../MEDIA/IMG/escultura.png" alt="Sculpture">
            </div>
        </main>
    </section>


    <!-- Classification -->
    <section class="clasificacion-artes">
        <div class="contenedor-clasificacion">

            <div class="carrusel-container">
                <button class="carrusel-btn izquierda">&#10094;</button>
                <div class="carrusel">

                    <div class="tarjeta">
                        <img src="../MEDIA/IMG/arquitectura.jpg" alt="Architecture">
                        <h2>Architecture</h2>
                        <p>Architecture is also one of the oldest and most important arts that exist. Like painting and
                            sculpture, its origins date back to prehistory.</p>
                        <p><em>Architectural constructions from most periods in history and cultures have been
                                preserved, and their evolution is linked to different forms of human life and social
                                organization.</em></p>
                        <a href="../HTMLEN/artesPopulares.php" class="boton-vermas">See more</a>
                    </div>

                    <div class="tarjeta">
                        <img src="../MEDIA/IMG/dibujo.webp" alt="Drawing">
                        <h2>Drawing</h2>
                        <p>It has been a universal language and tool for expression and communication, as well as a
                            means of transmitting symbols and signs in all cultures.</p>
                        <p><em>Drawing is the art and technique of creating images on a surface through lines, shapes,
                                and strokes. Through the act of drawing, an image is recorded.</em></p>
                        <a href="../HTMLEN/artesGraficas.php" class="boton-vermas">See more</a>
                    </div>

                    <div class="tarjeta">
                        <img src="../MEDIA/IMG/grabado.jpg" alt="Engraving">
                        <h2>Engraving</h2>
                        <p>The art of engraving is one of the techniques that involves processes that artists follow to
                            transfer their imagination onto sheets of paper.</p>
                        <p><em>It is a technique of printing images onto a surface. Different materials are used, both
                                to create the mold and to receive the printed image.</em></p>
                        <a href="../HTMLEN/arteContemporaneo.php" class="boton-vermas">See more</a>
                    </div>

                </div>
                <button class="carrusel-btn derecha">&#10095;</button>
            </div>

            <div class="textoClas">
                <h1>Classification of</h1>
                <h1>Visual Arts</h1>
                <hr>
                <p>Visual arts are an artistic, expressive manifestation of visual perception in which the individual
                    creates and recreates natural or fantastic worlds through material elements, using various
                    techniques that allow them to express feelings, emotions, and perceptions of the surrounding
                    world.</p>
            </div>

        </div>
        <script src="../JAVASCRIPTEN/carrusel-index.js"></script>
    </section>


    <?php
    include("../HTMLEN/footer.php");
    ?>
</body>

</html>
