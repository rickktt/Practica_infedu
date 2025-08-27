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
    <title>Artes Visuales</title>
    <link rel="stylesheet" href="../CSS/artesVisuales.css">
    <script src="../JAVASCRIPT/modo.js"></script>
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body class="background">

    <?php
    include("../HTMLEN/navbar.php");
    ?>
    <button class="theme-toggle-left">
        <img src="../MEDIA/IMG/estados unidos.png" alt="estados unidos">
    </button>
    <button class="theme-toggle-left" onclick="window.location.href='../HTML/artesVisuales.php'">
        <img src="../MEDIA/IMG/españa.png" alt="estados unidos">
        <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
            <span class="theme-icon sun-icon">☀️</span>
            <span class="theme-icon moon-icon">🌙</span>
        </button>

        <section class="section2">
            <h1>Visual Arts</h1>
            <hr>

            <main>
                <div class="texto">
                    <p>
                        Humans are expressive by nature, as we love to share with the world our perception of things;
                        visual arts contribute to this task. It is thanks to visual arts that today we find ourselves
                        immersed in a world full of artistic expressions.
                    </p>

                    <!-- Hidden content -->
                    <div class="extra" id="contenidoExtra">
                        <p>
                            Visual arts are an artistic, expressive manifestation of visual perception in which the
                            individual creates and recreates natural or fantastic worlds using material elements and
                            various techniques that allow them to express their feelings, emotions, and perceptions of
                            the surrounding world.
                        </p>
                        <p>
                            The concept of Visual Arts emerged at the end of World War II, when European artists who had
                            emigrated to New York established an artistic production related to expressive and formal
                            freedom, fostered by the avant-gardes of the late 19th century, to which was added the
                            crucial push of Marcel Duchamp's proposals.
                        </p>
                    </div>

                    <!-- "See more" button -->
                    <button class="ver-mas-btn" onclick="mostrarContenido()">See more</button>
                </div>

                <div class="caja-lateral">
                    <img src="../MEDIA/IMG/artesVisuales_1.jpg" alt="Visual art piece">
                    <blockquote><strong> It was around 1980 that the term “Visual Arts” began to predominate in the
                            vocabulary, as it is more suitable for contemporary art than the term Plastic Arts.</strong>
                    </blockquote>
                </div>
            </main>
            <script src="../JAVASCRIPT/vermas.js"></script>
        </section>

        <section class="section">
            <h1>Key Elements of Visual Arts</h1>
            <hr>
            <div class="img-container">
                <img src="../MEDIA/IMG/artesVisuales_1.jpg" alt="Various art pieces" />
            </div>

            <div class="text-container">
                <p><strong>Visual Perception:</strong> Sight is the main sense through which the artwork is appreciated
                    and understood.</p>
                <p><strong>Creative Expression:</strong> They allow artists to express their ideas, emotions, and
                    perceptions of the world through the creation of images.</p>
                <p><strong>Diversity of Techniques:</strong> They include a wide range of techniques, from painting and
                    sculpture to photography and digital art.</p>
                <p><strong>Interdisciplinarity:</strong> Visual arts often intersect with other artistic disciplines and
                    with technology.</p>
                <blockquote>
                    “Art does not reproduce the visible, it makes visible the invisible.” – Paul Klee
                </blockquote>
            </div>
        </section>

        <section class="estetica-section">
            <div class="columna-izquierda">
                <h2>Aesthetic Criteria</h2>
                <ul>
                    <li>Harmony.</li>
                    <li>Color.</li>
                    <li>Composition.</li>
                    <li>Space.</li>
                    <li>Balance.</li>
                    <li>Light.</li>
                    <li>Movement.</li>
                    <li>Perspective.</li>
                    <li>Rhythm.</li>
                    <li>Texture.</li>
                </ul>
                <img src="../MEDIA/IMG/criterios" alt="Classic art piece" />
                <p>From these codes or languages, the artist seeks to convey a determined aesthetic experience to the
                    viewer.</p>
            </div>

            <div class="columna-derecha">
                <h2>Basic Ideas that Define Visual Art</h2>
                <p><strong>Appropriation:</strong> By the artist, of an unlimited amount of resources as well as styles,
                    even from past centuries.</p>
                <p><strong>Circulation and Experimentation:</strong> It is presented through different media and
                    materials.</p>
                <p><strong>Pluralism and Globalization:</strong> It relates to the fluid communication between artists
                    from different countries and continents.</p>
                <p><strong>Exhibition Strategies:</strong> Both artists and curators seek new exhibition strategies in
                    line with the nature of the works.</p>
            </div>
        </section>

        <section class="contenedor-ideas">
            <h2>Basic Ideas that Define Visual Art</h2>
            <ul>
                <li><strong>Appropriation:</strong> By the artist, of an unlimited amount of resources as well as
                    styles, even from past centuries.</li>
                <li><strong>Circulation and Experimentation:</strong> It is presented through different media and
                    materials.</li>
                <li><strong>Pluralism and Globalization:</strong> It relates to the fluid communication between artists
                    from different countries and continents.</li>
                <li><strong>Exhibition Strategies:</strong> Both artists and curators seek new exhibition strategies in
                    line with the nature of the works.</li>
            </ul>
        </section>

        <section class="seccion-arte">
            <div class="texto-izquierda">
                <h2>Visual Arts are important because:</h2>
                <ul>
                    <li>They allow creative expression and the communication of ideas and emotions.</li>
                    <li>They help understand the culture and history of different societies.</li>
                    <li>They have an impact on society and can influence how people perceive the world.</li>
                    <li>They are a tool for education and personal development.</li>
                </ul>
            </div>
            <div class="imagen-central">
                <img src="../MEDIA/IMG/artesVisuales3.jpg" alt="Visual arts collage">
            </div>

            <div class="texto-derecha">
                <h2>What are Visual Arts for?</h2>
                <p>
                    They serve or fulfill an aesthetic, ideological, commemorative, pedagogical mission and act as a
                    mechanism to expand reality. They are also essential to sensitize the viewer, transform spaces, and
                    function as an excellent vehicle for expression.
                </p>
            </div>
        </section>

        <!-- CLASSIFICATION of Visual Arts -->
        <section class="titulo">
            <h1>Classification of Visual Arts</h1>
            <hr>
            <div class="tarjetas">
                <div class="tarjeta">
                    <img src="../MEDIA/IMG/ARTESPLASTICAS.jpg" alt="Plastic Arts">
                    <h2>Plastic Arts</h2>
                    <p>All arts that use moldable or manipulable materials in their creation process.</p>
                    <p><em>Painting, Drawing, Sculpture, Printmaking, Ceramics...</em></p>
                    <a href="../HTML/artesPlasticas.php" class="boton-vermas">See more</a>
                </div>
                <div class="tarjeta">
                    <img src="../MEDIA/IMG/ARTESPOPULARES.jpeg" alt="Folk Arts">
                    <h2>Folk Arts</h2>
                    <p>All arts that use moldable or manipulable materials in their creation process.</p>
                    <p><em>Painting, Drawing, Sculpture, Printmaking, Ceramics...</em></p>
                    <a href="../HTML/artesPopulares.php" class="boton-vermas">See more</a>
                </div>
                <div class="tarjeta">
                    <img src="../MEDIA/IMG/ARTESGRAFICAS.jpg" alt="Graphic Arts">
                    <h2>Graphic Arts</h2>
                    <p>A set of techniques that generate visual elements from engravings, drawings, and computer
                        methods.</p>
                    <p><em>Illustration, Typography, and Lettering...</em></p>
                    <a href="../HTML/artesGraficas.php" class="boton-vermas">See more</a>
                </div>
                <div class="tarjeta">
                    <img src="../MEDIA/IMG/ARTECONTEMPORÁNEO.jpg" alt="Contemporary Art">
                    <h2>Contemporary Art</h2>
                    <p>Artistic manifestations that arise from the 20th century onwards.</p>
                    <p><em>Digital Art, Conceptual Art, Urban Art...</em></p>
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
</body>

</html>