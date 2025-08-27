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
    <title>Artes</title>
    <link rel="stylesheet" href="../CSS/arte.css">
    <script src="../JAVASCRIPT/modo.js"></script>
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body class="fondo">

    <?php
    include("../HTMLEN/navbar.php");
    ?>
    <button class="theme-toggle-left" onclick="window.location.href='../HTML/arte.php'">
        <img src="../MEDIA/IMG/españa.png" alt="estados unidos">
        <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
            <span class="theme-icon sun-icon">☀️</span>
            <span class="theme-icon moon-icon">🌙</span>
        </button>
        <!----ARTES---->
        <section class="contenedor">
        </div>
        <div>
            <h1>Types of Art</h1>
            <hr>
            <div class="image">

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Josue-Basket.jpg"
                        alt="Representation of Plastic Arts">
                    <div class="padding">
                        <h3>Fernando José Martínez Medrano</h3>
                        <p><b>11th Grade "F" Graphic Design</b></p>
                        <p>This drawing is inspired by basketball player Anthony Edwards</p>
                        <p><b>Technique:</b> Color</p>
                        <p><b>Materials:</b> Prismacolor Premier</p>
                        <p><b>Type of Art:</b> Traditional Drawing</p>
                        <p><b>Tip:</b> When you want colors to blend well, start without applying pressure so that little by little they combine. The most important thing is to be patient.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Josue-Streamer.jpg"
                        alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Fernando José Martínez Medrano</h3>
                        <p><b>11th Grade "F" Graphic Design</b></p>
                        <p>This is a portrait of a streamer named Kyedae</p>
                        <p><b>Technique:</b> Digital Drawing</p>
                        <p><b>Tools:</b> Procreate</p>
                        <p><b>Type of Art:</b> Digital Drawing</p>
                        <p><b>Tip:</b> Constantly check which layer you are working on to avoid mistakes.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Edith.jpg" alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Edith Hernández</h3>
                        <p><b>10th Grade "E" Graphic Design</b></p>
                        <p>It represents the Virgin Mary holding the body of Jesus in her arms after being taken down from the cross. Inspired by the religious image of "La Dolorosa".</p>
                        <p><b>Technique:</b> Traditional sketch (paper) digitalized</p>
                        <p><b>Tools:</b> Textured paper and Ibis Paint</p>
                        <p><b>Type of Art:</b> Modern Art. Main inspiration: Baroque</p>
                        <p><b>Tip:</b> Understanding how body muscles work helps create more dynamic and natural poses when drawing.</p>
                    </div>
                </div>
            </div>

            <div class="image">
                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/sophia.jpg" alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Sophia Elizabeth Andrade Serrano</h3>
                        <p><b>9th Grade "K" Bilingual</b></p>
                        <p>They say lilies are the flower of honor. But, what greater honor is there than being your friend? The lilies represent my beloved friends. Three lilies for three honorable friends.</p>
                        <p><b>Technique:</b> Gradient</p>
                        <p><b>Tools:</b> Acrylic Paints</p>
                        <p><b>Type of Art:</b> Visual Art > Painting</p>
                        <p><b>Tip:</b> Wait and let it dry between layers to achieve a better result.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/sofia.jpg" alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Sofía Gutierrezo</h3>
                        <p><b>10th Grade "E" Graphic Design</b></p>
                        <p>This painting shows a ladybug in the foreground, with a red body and black spots, on a bright yellow background. The style is colorful and simple, with marked lines and decorative spiral details, giving it a cheerful and expressive touch. It can be classified as naïve or decorative art, due to its use of flat shapes, vivid colors, and accessible composition.</p>
                        <p><b>Technique:</b> Wet (acrylic)</p>
                        <p><b>Tools:</b> Canvas and acrylic paints</p>
                        <p><b>Type of Art:</b> Visual Art > Naïve Art</p>
                        <p><b>Tip:</b> When working with acrylics and gradients, do them quickly while the paint is still fresh, since acrylic dries fast.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/joel.jpg" alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Joel Pérez</h3>
                        <p><b>11th Grade "F" Graphic Design</b></p>
                        <p>Illustration made for a children’s book activity, creating characters based on classroom tools.</p>
                        <p><b>Technique:</b> Digital Art</p>
                        <p><b>Tools:</b> Laptop and graphic tablet</p>
                        <p><b>Type of Art:</b> Visual Art > Digital Arts</p>
                        <p><b>Tip:</b> Watch tutorials and put them into practice. Don’t pressure yourself if it doesn’t work out the first time—everything in life takes practice, and mistakes help us learn. Seek inspiration from specialized artists.</p>
                    </div>
                </div>
            </div>

            <div class="image">
                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Payasita.PNG" alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>11th Grade "E" Graphic Design</b></p>
                        <p>Clown Girl Art</p>
                        <p><b>Title:</b> Payasita</p>
                        <p>A little clown girl with a surprised face reflects the innocence and unexpected joy hidden behind every smile.</p>
                        <p><b>Technique:</b> Freehand drawing with color application, expressive lines for the face, and details in clothing.</p>
                        <p><b>Tools:</b> Colored pencils and opaline paper</p>
                        <p><b>Type of Art:</b> Visual Art > Figurative Drawing, Character Illustration</p>
                        <p><b>Tip:</b> Use a darker colored pencil to outline the hair and facial details to highlight the expression and focus attention on the look of surprise.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Vaso lleno.jpg" alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>11th Grade "E" Graphic Design</b></p>
                        <p>Glass and milk carton art</p>
                        <p><b>Title:</b> Vaso lleno</p>
                        <p>This drawing reflects the idea that sometimes, in order to “fill the glass,” it is necessary to let go of control and flow, reminding us that there is fullness even in overflow.</p>
                        <p><b>Technique:</b> Freehand drawing with shading, light and shadow contrasts to give volume and texture.</p>
                        <p><b>Tools:</b> Graphite pencil, charcoal (for deep shadows), and opaline paper</p>
                        <p><b>Type of Art:</b> Figurative Art (represents real things)</p>
                        <p><b>Tip:</b> Use a blending stump or soft paper to blend graphite and charcoal in a controlled way, achieving smooth transitions in the liquid and volume in the carton.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Madurez.PNG" alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>11th Grade "E" Graphic Design</b></p>
                        <p>Pear Art</p>
                        <p><b>Title:</b> Madurez</p>
                        <p>A pear in warm tones with a green leaf symbolizes the sweetness and fullness that come with time, reminding us of the beauty in simplicity.</p>
                        <p><b>Technique:</b> Freehand watercolor painting, using gradients and transparencies to create volume and light.</p>
                        <p><b>Tools:</b> Watercolors and 300 g watercolor paper</p>
                        <p><b>Type of Art:</b> Visual Art > Figurative Painting, Still Life</p>
                        <p><b>Tip:</b> Use little water in shadow areas to intensify color and highlight form, while leaving light areas unpainted to reflect natural fruit shine.</p>
                    </div>
                </div>
            </div>

                        <div class="image">
                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Dulce Elegancia.jpg" alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>11th Grade "E" Graphic Design</b></p>
                        <p>Art of a cupcake</p>
                        <p><b>Title:</b> Dulce Elegancia</p>
                        <p>A pink cupcake with decorative swirls and stars conveys the sweetness and refinement found in the smallest details of life.</p>
                        <p><b>Technique:</b> Colored pencil drawing with highlights in the frosting and use of contrasts to highlight decorative details.</p>
                        <p><b>Tools:</b> Colored pencils, opaline paper</p>
                        <p><b>Type of Art:</b> Visual Art > Decorative Illustration</p>
                        <p><b>Tip:</b> Apply several light layers of color to create a smooth, shiny texture, especially in elements like frosting, achieving a realistic and appetizing look.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Azulillos.PNG" alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>11th Grade "E" Graphic Design</b></p>
                        <p>Art of flowers</p>
                        <p><b>Title:</b> Azulitos</p>
                        <p>Three blue flowers with delicate shapes evoke tranquility, sensitivity, and the harmony found in nature.</p>
                        <p><b>Technique:</b> Watercolor painting with transparencies and smooth brushstrokes to highlight the fragility of the petals.</p>
                        <p><b>Tools:</b> Watercolors, watercolor paper</p>
                        <p><b>Type of Art:</b> Visual Art > Floral Painting</p>
                        <p><b>Tip:</b> Use more water and less pigment to create delicate, translucent tones, ideal for flower petals, preserving their lightness and natural beauty.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Estrella en el charco.jpg" alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>11th Grade "E" Graphic Design</b></p>
                        <p>Art of a puddle and a star</p>
                        <p><b>Title:</b> Estrella en el Charco</p>
                        <p>This artwork shows a star reflected in a puddle, symbolizing the idea that beauty can be found even in unexpected places, transforming the ordinary into extraordinary.</p>
                        <p><b>Technique:</b> Watercolor with reflections and transparencies, simulating water texture and light on the star.</p>
                        <p><b>Tools:</b> Watercolors and watercolor paper</p>
                        <p><b>Type of Art:</b> Visual Art > Figurative Art, Symbolic Illustration</p>
                        <p><b>Tip:</b> Leave small unpainted white spaces to represent water reflections, enhancing brightness and realism.</p>
                    </div>
                </div>
            </div>

            <div class="image">
                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/ale.jpg" alt="Representation of Popular Arts">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>11th Grade "E" Graphic Design</b></p>
                        <p>Art of flowers</p>
                        <p><b>Title:</b> Amapolas</p>
                        <p>A set of poppies with vibrant red tones symbolizes life, passion, and the fleeting beauty of nature.</p>
                        <p><b>Technique:</b> Watercolor painting with gradients and the contrast of intense reds and subtle greens.</p>
                        <p><b>Tools:</b> Watercolors, watercolor paper</p>
                        <p><b>Type of Art:</b> Visual Art > Floral Painting, Expressionism</p>
                        <p><b>Tip:</b> To make colors stand out more, apply several watercolor layers, letting each one dry before applying the next. This avoids color mixing and highlights intensity.</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="../JAVASCRIPTEN/arte.js"></script>
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
        </footer>
</body>

</html>