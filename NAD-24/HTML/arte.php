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
    include("../HTML/navbar.php");
    ?>
    <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/arte.php'">
        <img src="../MEDIA/IMG/estados unidos.png" alt="estados unidos">
    </button>
    <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
        <span class="theme-icon sun-icon">☀️</span>
        <span class="theme-icon moon-icon">🌙</span>
    </button>
    <!----ARTES---->
    <section class="contenedor">
        </div>
        <div>
            <h1>Tipos de Arte</h1>
            <hr>
            <div class="image">

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Josue-Basket.jpg"
                        alt="Representación de las Artes Plásticas">
                    <div class="padding">
                        <h3>Fernando José Martínez Medrano</h3>
                        <p><b>3° "F" Diseño Gráfico</b></p>
                        <p>Este dibujo esta inspirado en un jugador de basket Anthony Edwards</p>
                        <p><b>Tecnica:</b> color</p>
                        <p><b>Materiales:</b> Prismacolor premier</p>
                        <p><b>Tipo de Arte:</b> Dibujo tradicional</p>
                        <p><b>Tip:</b> Cuando quieren hacer que los colores se mezclen bien inicien sin hacer presion
                            para que poco a poco inicien a combinarse y lo importante tener paciencia</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Josue-Streamer.jpg"
                        alt="Representación de las Artes Populares">
                    <div class="padding">
                        <h3>Fernando José Martínez Medrano</h3>
                        <p><b>3° "F" Diseño Gráfico</b></p>
                        <p>Es un retrato de una streamer llamada Kyedae</p>
                        <p><b>Tecnica:</b> Dibujo digital</p>
                        <p><b>Herramientas:</b> Procreate</p>
                        <p><b>Tipo de Arte:</b>Dibujo digital</p>
                        <p><b>Tip:</b>Revisar constantemente en que capas se está trabajando, para evitar equivocarse
                        </p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Edith.jpg" alt="Representación de las Artes Populares">
                    <div class="padding">
                        <h3>Edith Hernández</h3>
                        <p><b>2° "E" Diseño Gráfico</b></p>
                        <p>Representa a la Virgen María al recibir en brazos el cuerpo de Jesús luego de ser bajado de
                            la cruz. Inspirado en la imagen religiosa de "La Dolorosa"</p>
                        <p><b>Tecnica:</b> Boceto en tradicional (papel) digitalizado</p>
                        <p><b>Herramientas:</b>Papel gramado e Ibis Paint</p>
                        <p><b>Tipo de Arte:</b>Arte moderno. Principal inspiración en el barroco</p>
                        <p><b>Tip:</b>La comprensión de como funcionan los músculos del cuerpo ayuda al aspecto dinámico
                            y natural de las poses al dibujar.</p>
                    </div>
                </div>
            </div>

            <div class="image">
                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/sophia.jpg" alt="Representación de las Artes Populares">
                    <div class="padding">
                        <h3>Sophia Elizabeth Andrade Serrano</h3>
                        <p><b>1° "K" Bilingüe</b></p>
                        <p>Dicen que los lirios son la flor del honor. Pero, ¿Qué honor más grande que el ser su amiga?
                            Los lirios representan a mis amadas amigas. Tres lirios para tres honorables amigas.</p>
                        <p><b>Tecnica:</b>Degradé</p>
                        <p><b>Herramientas:</b> Pinturas Acrílicas</p>
                        <p><b>Tipo de Arte:</b> Arte Visual > Pintura</p>
                        <p><b>Tip:</b>Esperar y dejar secar entre capas, para lograr un mejor resultado.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/sofia.jpg" alt="Representación de las Artes Populares">
                    <div class="padding">
                        <h3>Sofía Gutierrezo</h3>
                        <p><b>2° "E" Diseño Gráfico</b></p>
                        <p>Esta pintura muestra una mariquita en primer plano, con cuerpo rojo y puntos negros, sobre un
                            fondo amarillo brillante. El estilo es colorido y simple, con líneas marcadas y detalles
                            decorativos en espiral, que le dan un toque alegre y expresivo. Se puede clasificar como
                            arte naíf o decorativo, por su uso de formas planas, colores vivos y composición accesible
                        </p>
                        <p><b>Tecnica:</b>Humeda (acrílico)</p>
                        <p><b>Herramientas:</b> Lienzo y pinturas acrílicas </p>
                        <p><b>Tipo de Arte:</b> Arte visual > Arte naíf</p>
                        <p><b>Tip:</b>Si se trabaja con acrílicas y degradados hacerlos rápido y en el tiempo que sigue
                            fresco ya que el acrílico es una pintura que seca rápido.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/joel.jpg" alt="Representación de las Artes Populares">
                    <div class="padding">
                        <h3>Joel Pérez</h3>
                        <p><b>3° "F" Diseño Gráfico</b></p>
                        <p>Ilustración hecha para una actividad de un libro para niños realizando personajes basados en
                            herramientas del salón de clases.</p>
                        <p><b>Tecnica:</b> Arte Digital</p>
                        <p><b>Herramientas:</b> Laptop y tableta grafica</p>
                        <p><b>Tipo de Arte:</b>Arte visual > Artes digitales.</p>
                        <p><b>Tip:</b>Mirar tutoriales y ponerlos a practica, que no se presionen si no sale a la
                            primera todo en la vida lleva practica y de los mismos errores vamos aprendiendo y buscar
                            inspiración en artistas especializados.</p>
                    </div>
                </div>
            </div>

            <div class="image">
                

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Vaso lleno.jpg" alt="Representación de las Artes Populares">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>3° "E" Diseño Gráfico</b></p>
                        <p>Arte vaso y cartón de leche</p>
                        <p><b>Título:</b> Vaso lleno </p>
                        <p>Este dibujo refleja la idea de que a veces, para poder “llenar el vaso”, es necesario dejar
                            ir el control y fluir, recordándonos que en el desborde también hay plenitud.</p>
                        <p><b>Tecnica:</b> Dibujo a mano alzada con sombreado, contrastes de luces y sombras para dar
                            volumen y textura.</p>
                        <p><b>Herramientas:</b>Lápiz grafito, Carboncillo (para sombras profundas) y Papel opalina</p>
                        <p><b>Tipo de Arte:</b> Arte figurativo (representa cosas reales)</p>
                        <p><b>Tip:</b>Usa un difumino o papel suave para difuminar el grafito y el carboncillo de forma
                            controlada, logrando transiciones suaves en el líquido y volumen en el cartón rápido.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Madurez.PNG" alt="Representación de las Artes Populares">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>3° "E" Diseño Gráfico</b></p>
                        <p>Arte pera</p>
                        <p><b>Título:</b> Madurez</p>
                        <p>Una pera en tonos cálidos con una hoja verde simboliza la dulzura y plenitud que llegan con
                            el tiempo, recordándonos la belleza de lo sencillo.</p>
                        <p><b>Tecnica:</b> Pintura a mano alzada con acuarela, uso de degradados y transparencias para
                            crear volumen y luz.</p>
                        <p><b>Herramientas:</b> Acuarelas y Papel para acuarela de 300 gramos</p>
                        <p><b>Tipo de Arte:</b>Arte visual > Pintura figurativa, naturaleza muerta.</p>
                        <p><b>Tip:</b>Usa poca agua en zonas de sombra para intensificar el color y resaltar la forma,
                            mientras dejas áreas claras sin color para reflejar la luz natural de la fruta.</p>
                    </div>
                </div>
            </div>

            <div class="image">
                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Dulce Elegancia.jpg"
                        alt="Representación de las Artes Populares">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>3° "E" Diseño Gráfico</b></p>
                        <p>Arte María Antonieta comiendo pastel</p>
                        <p><b>Título:</b> Dulce Elegancia 🍰🌸</p>
                        <p>María Antonieta disfruta un momento delicado y dulce,contrasta con el fondo suave en tonos
                            rosados y lilas, creando una atmósfera romántica y sofisticada.</p>
                        <p><b>Tecnica:</b>Pintura a mano alzada con yeso graso, usando líneas sombreadas y difuminadas
                            para dar profundidad y textura en el cabello y el vestido.</p>
                        <p><b>Herramientas:</b> Yeso graso y Papel acuarela con textura granate 300 g/m²</p>
                        <p><b>Tipo de Arte:</b> Arte Visual > Arte figurativo con yeso graso.</p>
                        <p><b>Tip:</b>Para dar más vida y detalle, usa capas suaves y varía la presión al aplicar yeso
                            para lograr texturas y contrastes que realcen los elementos principales.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Azulillos.PNG" alt="Representación de las Artes Populares">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>3° "E" Diseño Gráfico</b></p>
                        <p>Arte Arándanos </p>
                        <p><b>Título:</b> Azulitos </p>
                        <p>Tres arándanos con hojas verdes reflejan cómo las pequeñas cosas pueden llenar de color, vida
                            y alegría cada instante.</p>
                        <p><b>Tecnica:</b> Pintura a mano alzada en acuarela con mezclas de azul marino y detalles en
                            hojas para crear contraste y luz.</p>
                        <p><b>Herramientas:</b>Acuarelas y Papel para acuarela de 300 gramos</p>
                        <p><b>Tipo de Arte:</b> Pintura figurativa, estudio de fruta.</p>
                        <p><b>Tip:</b> Para dar volumen a los arándanos, usa más pigmento en las zonas de sombra y un
                            toque de agua limpia para crear brillos naturales.</p>
                    </div>
                </div>

                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/Estrella en el charco.jpg"
                        alt="Representación de las Artes Populares">
                    <div class="padding">
                        <h3>Andrea Aquino</h3>
                        <p><b>3° "E" Diseño Gráfico</b></p>
                        <p><b>Título:</b>Estrella en el Charco ✨🌊</p>
                        <p>Una chica camina sobre un charco. Su vestido morado y su cabello al viento se funden con la
                            estrellita brillante que la acompaña, mientras peces juguetones parecen bailar a su
                            alrededor, creando un momento mágico y lleno de vida.</p>
                        <p><b>Tecnica:</b> Pintura a mano alzada en acuarela, utilizando lavados suaves y detalles con
                            pincel para capturar movimiento y luminosidad.</p>
                        <p><b>Herramientas:</b> Acuarelas y Papel acuarela con textura granate 300 g/m²</p>
                        <p><b>Tipo de Arte:</b>Arte figurativo con acuarela.</p>
                        <p><b>Tip:</b>Para darle vida a la escena, usa pinceladas fluidas y juega con transparencias
                            para resaltar la luz de la estrellita.</p>
                    </div>
                </div>
            </div>

            <div class="image">
                <div class="art-class">
                    <img src="../MEDIA/IMG/Galeria-Students/ale.jpg" alt="Representación de las Artes Populares">
                    <div class="padding">
                        <h3>Pansy Rabbit</h3>
                        <p><b>1° "A"</b></p>
                        <p><b>Título:</b> Amapolas, mi dulce consuelo</p>
                        <p>Todos amamos soñar y anhelamos con fuerza que esos sueños se hagan realidad. Este patrón de
                            textiles representa precisamente eso: nuestras protagonistas, las amapolas rojas, que
                            simbolizan a las apasionadas e infinitas soñadoras, junto a las estrellas moradas, que
                            forman parte esencial de su ser, pues son sus sueños.</p>
                        <p><b>Tecnica:</b> Diseño grafico el contraste y el balance en la composicion</p>
                        <p><b>Herramientas:</b>Para la creacion del patron se utilizaron los programas de Adobe
                            Illustrator and Adobe Photoshop.</p>
                        <p><b>Tipo de Arte:</b>  Diseño Gráfico</p>
                        <p><b>Tip:</b>En Adobe puedes verificar el contraste de colores para asegurar que tu diseño sea
                            legible y accesible. ¡No solo se trata de verse bien, sino de leerse bien también!</p>
                    </div>
                </div>


            </div>

            <script src="../JAVASCRIPT/arte.js"></script>
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