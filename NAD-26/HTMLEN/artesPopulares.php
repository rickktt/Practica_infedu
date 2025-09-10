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
    <title>Folk Art</title>
    <link rel="stylesheet" href="../CSS/artesPopulares.css">
    <script src="../JAVASCRIPT/modo.js"></script>
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/DarkMode.css">
    <link rel="stylesheet" href="../CSS/nav.css">
</head>

<body class="background">

    <?php
    include("../HTMLEN/nav1.php");
    ?>

    <button class="theme-toggle-left" onclick="window.location.href='../HTML/index.html'">
        <img src="../MEDIA/IMG/españa.png" alt="españa">
    </button>
    <button class="theme-toggle" id="themeToggle" aria-label="Switch light/dark mode">
        <span class="theme-icon sun-icon">☀️</span>
        <span class="theme-icon moon-icon">🌙</span>
    </button>

    <!-- Folk art intro -->
    <section class="section2">
        <h1>Popular Art</h1>
        <hr>
        <div>
            <img class="lam" src="../MEDIA/IMG/lamparaI.png" alt="">
        </div>
        <div>
            <img class="lam2" src="../MEDIA/IMG/lamparaD.png" alt="">
        </div>
        <main>
            <div class="texto">
                <p>Folk art is a category that designates the art "produced by the people." It is a changing and ambiguous concept (since the notion of "the people" changes depending on the historical period and geographic area).</p><br>

                <!-- Hidden content -->
                <div class="extra" id="contenidoExtra">
                    <p>According to this distinction, "great" art aspires to the beautiful and the "universal" (the same for all cultures), while folk art, associated with trades, is simple, local, utilitarian, decorative, or merely technical.</p><br>
                    <p>Contemporary art serves to reflect and question current reality, challenge conventions, explore new perspectives, and promote reflection on society and culture.</p><br>
                    <p>In addition to referring to folk art as folklore or traditions, in certain contexts, the concept is linked to mass or "easy" consumption expressions, in contrast to other more elaborate and less widespread aesthetic forms.</p>
                </div>

                <!-- See more button -->
                <button class="ver-mas-btn" onclick="mostrarContenido()">See more</button>
            </div>

            <div class="caja-lateral">
                <img src="../MEDIA/IMG/contemporaneo.jpg" alt="Contemporary">
                <p>Folk art is the most dynamic and living creative expression of a culture, as it is in direct connection with the values, worldview, traditions, and identity of the human group that produces it.</p>
            </div>
        </main>
        <script src="../JAVASCRIPT/vermas.js"></script>
    </section>


    <!-- Characteristics -->
    <section class="section">
        <h1>Characteristics</h1>
        <main>
            <div class="img-container">
                <img src="../MEDIA/IMG/ARTESPOPULARES.jpeg" alt="Folk Art">
            </div>
            <div class="text-container">
                <p><strong>Associated with the popular classes:</strong> It is produced independently, outside academies or official institutions.</p>
                <p><strong>Passed down through generations:</strong> It is transmitted through oral traditions and craft practices.</p>
                <p><strong>Integrated with life:</strong> Folk art acquires meaning through its integration with community life activities.</p>
                <p><strong>Not tied to a historical period:</strong> It is a form of expression shared by societies throughout history.</p>
            </div>
        </main>
    </section>


    <!-- Handicrafts & Folk Types -->
    <section class="clasificacion-artes">
        <div class="columna-izquierda">
            <h1>HANDICRAFTS</h1>
            <p>Handcrafted products stand out for their quality, originality, and cultural value. They reflect customs, beliefs, history, and resources of the environment in which they are created.</p>
            <img src="../MEDIA/IMG/artesanias.webp" alt="Handicrafts">
        </div>

        <div class="columna-derecha">
            <h1>Types of Folk Art</h1>
            <p>Crafts are the art and technique of making objects or products manually, with little or no use of industrial machinery, and through traditional methods passed down from generation to generation.</p>
            <p>This type of work typically uses local raw materials and simple tools. The techniques used are part of the intangible cultural heritage of a specific community, giving each piece symbolic value and unique identity.</p>
            <p>Craft pieces can serve various purposes: domestic, ornamental, ceremonial, symbolic, or utilitarian, such as clothing or work instruments.</p>
        </div>
    </section>


    <!-- Religious Art -->
    <section class="section">
        <h1>Religious Art</h1>
        <main>
            <div class="img-container">
                <img src="../MEDIA/IMG/arteReligiosos.jpg" alt="Religious Art">
            </div>
            <div class="text-container">
                <p><strong>Origins:</strong> Religious Art refers to artistic productions intended for worship of the sacred or divine. It has its origins in the consolidation of faith and spans from the pre-romantic period to neoclassicism in the 19th century.</p>
                <p><strong>Spiritual function:</strong> Throughout the centuries, faith has been expressed through painting, mosaics, and sculptures to depict the divine.</p>
                <p><strong>Frequent themes:</strong> In Christianity, common depictions include the Annunciation, Nativity, Baptism, Judgment, Crucifixion, Death, Resurrection, and representations of saints and prophets.</p>
                <blockquote>
                    “Religious art not only represents the sacred, but seeks to bring the divine closer to humanity.”
                </blockquote>
            </div>
        </main>
    </section>


    <!-- Visual Arts Classification -->
    <section class="clasificacion-artes">
        <div class="contenedor-clasificacion">

            <div class="carrusel-container">
                <button class="carrusel-btn izquierda">&#10094;</button>
                <div class="carrusel">

                    <div class="tarjeta">
                        <img src="../MEDIA/IMG/ARTESPLASTICAS.jpg" alt="Ceramics">
                        <h2>CERAMICS</h2>
                        <p>Ceramics is the art of making objects from fired clay. Clay is a sedimentary rock composed of hydrated aluminum silicates, which is white when pure and varies in color depending on the impurities it contains.</p>
                        <p><em>This art is one of humanity's most important inventions. The ability to store and transport products, especially liquids, was a great revolution.</em></p>
                        <a href="../HTML/artesPlasticas.php" class="boton-vermas">See more</a>
                    </div>

                    <div class="tarjeta">
                        <img src="../MEDIA/IMG/alfareria.jpg" alt="Pottery">
                        <h2>POTTERY</h2>
                        <p>Pottery is the art of shaping clay or mud to create objects, typically through manual techniques or using a wheel. While it was originally used to make household utensils, it is now also valued as a form of artistic expression.</p>
                        <p><em>Prehistoric pottery: The earliest pottery objects date back over 12,000 years, such as Jomon ceramics in Japan. These hand-made pieces were used for storing food and cooking.</em></p>
                        <a href="../HTML/artesPopulares.php" class="boton-vermas">See more</a>
                    </div>

                    <div class="tarjeta">
                        <img src="../MEDIA/IMG/orfebreria.jpg" alt="Goldworking">
                        <h2>GOLDWORKING</h2>
                        <p>Goldworking is the art of creating jewelry, ornaments, and accessories through traditional craftsmanship from precious metals or their alloys. Techniques include:</p>
                        <p><strong>Annealing:</strong> Heating the metal to soften it.</p>
                        <p><strong>Casting:</strong> Melting the metal to pour into a mold.</p>
                        <p><strong>Engraving:</strong> Tracing designs on the metal’s surface.</p>
                        <a href="../HTML/artesGraficas.php" class="boton-vermas">See more</a>
                    </div>

                    <div class="tarjeta">
                        <img src="../MEDIA/IMG/tapiceria.webp" alt="Upholstery">
                        <h2>UPHOLSTERY</h2>
                        <p>Upholstery refers to a set or combination of tapestries. A tapestry is a large fabric or textile used to cover the floor or other surfaces.</p>
                        <p><strong>Traditional:</strong> Uses horsehair, mounted on springs held together with straps.</p>
                        <p><strong>Contemporary:</strong> Uses synthetic foam and profiles.</p>
                        <p><strong>Semi-traditional:</strong> A fusion with both traditional elements (springs/straps) and modern ones (foam filling).</p>
                        <a href="../HTML/arteContemporaneo.php" class="boton-vermas">See more</a>
                    </div>

                    <div class="textoClas">
                        <h1>Classification of</h1>
                        <h1>Visual Arts</h1>
                        <hr>
                        <p>Visual arts are an artistic, expressive manifestation of visual perception in which the individual creates and recreates natural or imaginary worlds using material elements and techniques to express feelings, emotions, and perceptions of the surrounding world.</p>
                    </div>

                </div>
                <button class="carrusel-btn derecha">&#10095;</button>
            </div>
        </div>
    </section>


    <?php
    include("../HTMLEN/footer.php");
    ?>
</body>

</html>