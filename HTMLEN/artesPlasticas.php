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
    include("../HTMLEN/navbar.php");
    ?>
    <button class="theme-toggle-left" onclick="window.location.href='../HTML/artesGraficas.php'">
        <img src="../MEDIA/IMG/españa.png" alt="estados unidos">
        <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
            <span class="theme-icon sun-icon">☀️</span>
            <span class="theme-icon moon-icon">🌙</span>
        </button>
        <section class="section2">
            <h1>Plastic Arts</h1>
            <hr>

            <main>
                <div class="texto">
                    <p>We understand plastic arts as all those arts that use moldable or manipulable materials in their
                        creation process.</p><br>

                    <!-- Hidden content -->
                    <div class="extra" id="contenidoExtra">
                        <p>The most well-known are painting, sculpture, and architecture, but we can also include
                            drawing, engraving, ceramics, goldsmithing, etc.</p><br>
                        <p><b>OBJECTIVE</b> to build forms and images that present a vision of the world or reality
                            according to a set of aesthetic values defined by the artist.</p>
                        <P>The term originated in the 19th century to distinguish it from the disciplines that belong to
                            the 7 fine arts.</P>
                    </div>

                    <!-- See more button -->
                    <button class="ver-mas-btn" onclick="mostrarContenido()">See more</button>
                </div>

                <div class="caja-lateral">
                    <img src="../MEDIA/IMG/artes-pla-sticas.webp">
                </div>
            </main>
            <script src="../JAVASCRIPT/vermas.js"></script>
        </section>

        <section class="section">
            <h1>Characteristics</h1>
            <hr>
            <div class="img-container">
                <img src="../MEDIA/IMG/artesplasticas2.jpg">
            </div>

            <div class="text-container">
                <ul>
                    <li>Plastic arts are versatile and very rich artistic expressions. Their main characteristics
                        include:</li><br>
                    <li><b>1. Manipulation:</b> All plastic arts are based on the manipulation of materials, with the
                        aim of offering a creation that reflects the artist's expression. The manipulation of materials
                        can be done using all kinds of tools.</li><br>
                    <li><b>2. Expressiveness:</b> These are works that reflect and express the vision of the artist who
                        created them. Their manifestations often also include elements of a particular culture,
                        movement, or style.</li><br>
                    <li><b>3. Technical variety:</b> The variety of techniques used in plastic arts is comprehensive,
                        especially when we consider its definition, as it includes any element capable of modifying or
                        manipulating a material.</li><br>
                    <li>This technical variety brings with it a large number of tools specific to each particular
                        plastic art and, even more so, to each artistic style or movement.</li><br>
                </ul>
            </div>
        </section>

        <section class="estetica-section">
            <div class="columna-izquierda">
                <h1>Painting</h1>
                <p>There are different styles and genres of painting, developed throughout history, that include not
                    only personal expressions of the artist or painter but also cultural expressions.</p>
                <img src="../MEDIA/IMG/PINTURA.jpg" alt="Contemporary Art">
            </div>

            <div class="columna-derecha">
                <h1>Types of Plastic Arts</h1>
                <ul>
                    <li>Painting is one of the oldest artistic expressions of humanity. Its origins date back 36,000
                        years ago, with the cave paintings found in the Chauvet Cave in France.</li><br>
                    <li>It can be done using a wide variety of techniques and materials, such as oil, acrylics,
                        watercolor, or fresco painting, among others.</li><br>
                    <li>It is done by applying liquid pigments onto a surface, which can be paper, canvas, wood, fabric,
                        or even stone.</li><br>
                    <li>Additionally, various tools have been used for painting, such as brushes, spatulas, or even the
                        artist's own fingers.</li>
                </ul>
            </div>
        </section>

        <section class="seccion-arte">
            <div class="texto-izquierda">
                <p>Sculpture is the creation of works in three dimensions from different materials through molding or
                    manipulation.</p>
                <p>It is also one of the oldest arts, practiced since prehistoric times, reaching its peak in Ancient
                    Greece. In this sense, Western sculpture (as a plastic discipline) bases many of its aesthetic
                    values on what is called classical art.</p>
                <p>Depending on the style and technique used, we can also find several sculptural genres: full-round
                    sculpture, relief, and low-relief, wood carving, clay, stone, or metal carving.</p>
            </div>
            <div class="imagen-central">
                <h2>Sculpture</h2>
                <img src="../MEDIA/IMG/escultura.png" alt="What Contemporary Arts Are For">
                <p>Among the most commonly used materials are wood, stone (notably marble), metal (such as bronze), etc.
                </p>
            </div>
        </section>

        <!-- CLASSIFICATION of visual arts -->
        <section class="titulo">
            <h1>Classification of Visual Arts</h1>
            <hr>
            <div class="tarjetas">
                <div class="tarjeta">
                    <img src="../MEDIA/IMG/arquitectura.jpg" alt="Representation of Popular Arts">
                    <p>Architecture is also one of the oldest and most important arts that exist. Like painting and
                        sculpture, its origins date back to prehistory.</p>
                    <p><em>Architectural constructions from most periods in history and cultures have been preserved,
                            and their evolution is linked to different forms of human life and social organization.</em>
                    </p>
                    <a href="../HTML/artesPopulares.php" class="boton-vermas">See more</a>
                </div>
                <div class="tarjeta">
                    <img src="../MEDIA/IMG/dibujo.webp" alt="Representation of Graphic Arts">
                    <h1>Drawing</h1>
                    <p>It has been a universal language and tool for expression and communication, as well as a means of
                        transmitting symbols and signs in all cultures.</p>
                    <p><em>Drawing is the art and technique of creating images on a surface through lines, shapes, and
                            strokes. Through the act of drawing, an image is recorded.</em></p>
                    <a href="../HTML/artesGraficas.php" class="boton-vermas">See more</a>
                </div>
                <div class="tarjeta">
                    <img src="../MEDIA/IMG/grabado.jpg" alt="Representation of Contemporary Art">
                    <h1>Engraving</h1>
                    <p>The art of engraving is one of the techniques that involves one of the processes or steps that
                        artists must follow to translate their imagination onto sheets of paper.</p>
                    <p><em>It is a technique of printing images onto a surface. Different materials are used, both to
                            create the mold and to receive the printed image.</em></p>
                    <a href="../HTML/arteContemporaneo" class="boton-vermas">See more</a>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer>
            <div class="footer-left">
                <img src="../MEDIA/IMG/LOGONAD.png">
                <div>
                    <b>NAD</b><br>
                    Nice Art of Dreams<br>
                    © 2025 Nice Art of Dreams
                    <div class="social-icons">
                        <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                            <img class="icon" src="../MEDIA/IMG/instagram.png" alt="Instagram Logo">
                        </a>
                        <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                            <img class="icon" src="../MEDIA/IMG/facebook.png" alt="Facebook Logo">
                        </a>
                        <a href="https://www.twitter.com" target="_blank" aria-label="Twitter">
                            <img class="icon" src="../MEDIA/IMG/x.png" alt="Twitter Logo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-column">
                <h4>Options</h4>
                <p>Visual Arts</p>
                <p>Fine Arts</p>
                <p>Graphic Arts</p>
                <p>Popular Arts</p>
                <p>Contemporary Art</p>
            </div>
            <div class="footer-column">
                <h4>Legal Notice</h4>
                <p>Privacy Policy</p>
                <p>Terms of Service</p>
                <p>Contact Us</p>
            </div>
</body>
</html>