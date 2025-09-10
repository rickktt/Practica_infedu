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
    <title>Acerca de</title>
    <link rel="stylesheet" href="../CSS/acercaDe.css">
    <script src="../JAVASCRIPT/modo.js"></script>
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <div class="title">
            <img src="../MEDIA/IMG/favicon.png">
            <a>
                <p>NAD</p>
                <h1>Nice Art of Dreams</h1>
            </a>
        </div>
        <nav class="nav">
            <ul class="menu">
                <li><a href="../HTML/index1.php"><img class="im" src="../MEDIA/IMG/home.png">Inicio</a></li>
                <li><a href="../HTML/artesVisuales.php">Artes Visuales<img class="im"
                            src="../MEDIA/IMG/flechas.png"></a>
                    <ul>
                        <li><a href="../HTML/arteContemporaneo.php">Arte Contemporáneo</a></li>
                        <li class="divisor"></li>
                        <li><a href="../HTML/artesPlasticas.php">Artes Plásticas</a></li>
                        <li class="divisor"></li>
                        <li><a href="../HTML/artesGraficas.php">Artes Gráficas</a></li>
                        <li class="divisor"></li>
                        <li><a href="../HTML/artesPopulares.php">Artes Populares</a></li>
                        <li class="divisor"></li>
                    </ul>
                </li>
                <li><a href="../HTML/galeria.php">Galería</a>
                    <ul>
                        <li><a href="../HTML/arte.php">Arte</a></li>
                        <li class="divisor"></li>
                    </ul>
                </li>
                </li>
                <li><a href="../HTML/acercaDeNostros.php">Acerca de</a></li>
                <li class="user-menu"><a href=""><img src="../MEDIA/IMG/brocha.png">
                        <?php echo htmlspecialchars($_SESSION['usuario']); ?></a>
                    <ul class="submenu">
                        <li><a href="../PHP/logout.php">Cerrar <br>Sesión</a></li>
                        <li class="divisor"></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <section class="about-section">
        <div class="about-text">
            <h2>ACERCA DE NOSOTROS</h2>
            <div class="divider"></div>
            <p><span class="highlight">NAD (Nice Art of Dreams)</span> es una galería digital de arte creada para
                acercar el arte visual a todos, sin importar la experiencia previa. Queremos que el arte sea vivido,
                sentido y soñado.</p>
            <p>Aquí descubrirás pinturas, esculturas, ilustraciones, fotografía, arte digital y más. Cada obra es
                seleccionada cuidadosamente para ofrecer una <b>experiencia única y envolvente</b>.</p>
            <p>Contamos con una <b>colección especial</b> de obras destacadas que invitan a reflexionar, inspirarse y
                emocionarse, mostrando nuevas formas de ver el mundo.</p>
            <p>Nuestra misión es que el arte sea parte de tu día a día, no solo como algo que se observa, sino como algo
                que <b>se vive intensamente</b>. Porque en NAD, creemos que el arte transforma.</p>
            <p>Únete a nuestra comunidad, explora nuevas tendencias y redescubre la belleza desde una perspectiva
                diferente.</p>
        </div>
        <div class="about-image">
            <img src="../MEDIA/IMG/logoo.png" alt="Logo NAD">
        </div>
    </section>


    <footer>
        <div class="footer-left">
            <img src="../MEDIA/IMG/LOGONAD.png">
            <div>
                <b>NAD</b><br>
                Nice Art of Dreams<br>
                © 2025 Nice Art of Dreams
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