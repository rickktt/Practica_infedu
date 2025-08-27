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
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body>

    <?php
    include("../HTML/navbar.php");
    ?>
    <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/acercaDeNosotros.php'">
        <img src="../MEDIA/IMG/estados unidos.png" alt="estados unidos">
    </button>
    
    <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
        <span class="theme-icon sun-icon">☀️</span>
        <span class="theme-icon moon-icon">🌙</span>
    </button>
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