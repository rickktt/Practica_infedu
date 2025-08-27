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
    <title>Artes Populares</title>
    <link rel="stylesheet" href="../CSS/artesPopulares.css">
    <script src="../JAVASCRIPT/modo.js"></script>
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body class="background">

    <?php
    include("../HTMLEN/navbar.php");
    ?>
    <button class="theme-toggle-left" onclick="window.location.href='../HTML/index.html'">
        <img src="../MEDIA/IMG/españa.png" alt="estados unidos">
        <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
            <span class="theme-icon sun-icon">☀️</span>
            <span class="theme-icon moon-icon">🌙</span>
        </button>
        <section class="section2">
            <h1>Folk art</h1>
            <hr>

            <main>
                <div class="texto">
                    <p>Folk art is a category that designates the art "produced by the people." It is a changing and
                        ambiguous concept (since the notion of "the people" changes depending on the historical period
                        and geographic area).</p><br>

                    <!-- Hidden content -->
                    <div class="extra" id="contenidoExtra">
                        <p>According to this distinction, "great" art aspires to the beautiful and the "universal" (the
                            same for all cultures), while folk art, associated with trades, is simple, local,
                            utilitarian, decorative, or merely technical.</p><br>
                        <p>Contemporary art serves to reflect and question current reality, challenge conventions,
                            explore new perspectives, and promote reflection on society and culture.</p><br>
                        <p>In addition to referring to folk art as folklore or traditions, in certain contexts, the
                            concept is linked to mass or "easy" consumption expressions, in contrast to other more
                            elaborate and less widespread aesthetic forms.</p>
                    </div>

                    <!-- "See more" button -->
                    <button class="ver-mas-btn" onclick="mostrarContenido()">See more</button>
                </div>

                <div class="caja-lateral">
                    <img src="../MEDIA/IMG/contemporaneo.jpg">
                    <p>Folk art is the most dynamic and living creative expression of a culture, as it is in direct
                        connection with the values, worldview, traditions, and identity of the human group that produces
                        it.</p>
            </main>
            <script src="../JAVASCRIPT/vermas.js"></script>
        </section>

        <section class="section">
            <h1>Characteristics</h1>
            <hr>
            <div class="img-container">
                <img src="../MEDIA/IMG/ARTESPOPULARES.jpeg">
            </div>

            <div class="text-container">
                <ul>
                    <li><b>1:</b> It is associated with the popular classes. It is produced by the popular classes
                        independently, outside the academy or official institutions.</li><br>
                    <li><b>2:</b> It is transmitted between generations. It is passed on through communication
                        (generally oral) of traditions and craft practices.</li><br>
                    <li><b>3:</b> It is integrated with life. Folk art gains meaning through its integration with
                        community life activities.</li><br>
                    <li><b>4:</b> It does not belong to a specific historical period. It is a form of expression shared
                        by societies throughout history.</li><br>
                </ul>
            </div>
        </section>

        <section class="estetica-section">
            <div class="columna-izquierda">
                <h1>RELIGIOUS ART</h1>
                <li>Art has been linked to religion since its origins, considering that Religious Art is a term used for
                    all artistic productions intended for worship of the sacred or divine. It has its origins in the
                    consolidation of faith and spans the history of art from the pre-romantic period to neoclassicism in
                    the 19th century.</li><br>
                <li>Throughout the centuries, faith has been recognized, so we can see that Religious Art attempts to
                    depict each divine passage and aspect through painting, mosaics, and sculptures.</li><br>
                <li>The most common representations in Christianity include the Annunciation, the Nativity, Baptism,
                    Judgment, Crucifixion, Death, Resurrection, as well as saints and prophets, either alone or
                    depicting scenes inspired by sacred texts.</li>
                <img src="../MEDIA/IMG/arteReligiosos.jpg" alt="Religious Art">
            </div>

            <div class="columna-derecha">
                <h1>Types of Folk Art</h1>
                <p>Crafts are the art and technique of making objects or products manually, with little or no use of
                    industrial machinery, and through traditional methods passed down from generation to generation.</p>
                <p>This type of work typically uses local raw materials and simple tools. The techniques used are part
                    of the intangible cultural heritage of a specific community, giving each piece symbolic value and
                    unique identity.</p>
                <p>Craft pieces can serve various purposes: domestic, ornamental, ceremonial, symbolic, or utilitarian,
                    such as clothing or work instruments.</p>
            </div>
        </section>

        <section class="seccion-arte">
            <div class="texto-izquierda">
                <h2>HANDICRAFTS</h2>
                <p>Handcrafted products stand out for their quality, originality, and cultural value. They reflect
                    customs, beliefs, history, and resources of the environment in which they are created.</p>
            </div>
            <div class="imagen-central">
                <img src="../MEDIA/IMG/artesanias.webp" alt="HANDICRAFTS">
            </div>
        </section>

        <!-- CLASSIFICATION of Visual Arts -->
        <section class="titulo">
            <h1>Classification of Visual Arts</h1>
            <hr>
            <div class="tarjetas">
                <div class="tarjeta">
                    <img src="../MEDIA/IMG/ARTESPLASTICAS.jpg" alt="Plastic Arts">
                    <h1>CERAMICS</h1>
                    <p>Ceramics is the art of making objects from fired clay. Clay is a sedimentary rock composed of
                        hydrated aluminum silicates, which is white when pure and varies in color depending on the
                        impurities it contains.</p>
                    <p><em>This art is one of humanity's most important inventions. The ability to store and transport
                            products, especially liquids, was a great revolution.</em></p>
                    <a href="../HTML/artesPlasticas.php" class="boton-vermas">See more</a>
                </div>
                <div class="tarjeta">
                    <img src="../MEDIA/IMG/alfareria.jpg" alt="Representation of Popular Arts">
                    <h1>POTTERY</h1>
                    <p>Pottery is the art of shaping clay or mud to create objects, typically through manual techniques
                        or using a wheel. While it was originally used to make household utensils, it is now also valued
                        as a form of artistic expression.</p>
                    <p><em>Prehistoric pottery: The earliest pottery objects date back over 12,000 years, such as Jomon
                            ceramics in Japan. These hand-made pieces were used for storing food and cooking.</em></p>
                    <a href="../HTML/artesPopulares.php" class="boton-vermas">See more</a>
                </div>
                <div class="tarjeta">
                    <img src="../MEDIA/IMG/orfebreria.jpg" alt="Representation of Graphic Arts">
                    <h1>GOLDWORKING</h1>
                    <p>Goldworking is the art of creating pieces such as jewelry, objects, ornaments, and accessories
                        through traditional craftsmanship from precious metals or their alloys. The techniques used by
                        goldsmiths are just as important as the final result. These techniques include:</p>
                    <em>
                        <li><strong>Annealing:</strong> Heating the metal to soften it, as it tends to harden when
                            worked.</li>
                        <li><strong>Casting:</strong> Heating the metal to liquefy it, then pouring it into a mold.</li>
                        <li><strong>Engraving:</strong> A technique to trace designs on the metal's surface.</li>
                    </em>
                    <a href="../HTML/artesGraficas.php" class="boton-vermas">See more</a>
                </div>
                <div class="tarjeta">
                    <img src="../MEDIA/IMG/tapiceria.webp" alt="Representation of Contemporary Art">
                    <h1>UPHOLSTERY</h1>
                    <p>The first meaning of upholstery mentioned by the Royal Spanish Academy (RAE) refers to a set or
                        combination of tapestries. A tapestry is a large piece of fabric or a textile used to cover the
                        floor or other surfaces.</p>
                    <em>
                        <li><strong>Traditional:</strong> Uses horsehair, often mounted on springs held together with
                            straps.</li>
                        <li><strong>Contemporary:</strong> Uses synthetic foam and profiles.</li>
                        <li><strong>Semi-traditional:</strong> A fusion of both techniques, with traditional elements in
                            the springs and straps, and contemporary elements in the foam filling.</li>
                    </em>
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
        </footer>
</body>

</html>