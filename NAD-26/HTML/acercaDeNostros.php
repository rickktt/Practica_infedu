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
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/acercaDe.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/DarkMode.css">
    <script src="../JAVASCRIPT/modo.js"></script>
</head>

<body>

    <?php
    include("../HTML/nav1.php");
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

    <!-- Nueva sección de creadores mejorada -->
    <section class="creadores-section-new">
        <div class="container">
            <h2 class="section-title">NUESTRO EQUIPO</h2>
            <div class="creadores-grid-new">
                
                <!-- Creador 1 -->
                <div class="creador-item">
                    <div class="creador-circle">
                        <img src="../MEDIA/IMG/pamela.jpg" alt="Pamela">
                        <div class="creador-overlay">
                            <div class="creador-name">Pamela Hernandez</div>
                            <div class="creador-role">Desarrollo de Software</div>
                        </div>
                    </div>
                    <div class="creador-brand">Creador 1</div>
                </div>
                
                <!-- Creador 2 -->
                <div class="creador-item">
                    <div class="creador-circle">
                        <img src="../MEDIA/IMG/Nicole.jpg" alt="Nicole">
                        <div class="creador-overlay">
                            <div class="creador-name">Nicole Valladares</div>
                            <div class="creador-role">Desarrollo de Software</div>
                        </div>
                    </div>
                    <div class="creador-brand">Creador 2</div>
                </div>
                
                <!-- Creador 3 -->
                <div class="creador-item">
                    <div class="creador-circle">
                        <img src="../MEDIA/IMG/daniela.jpg" alt="Daniela">
                        <div class="creador-overlay">
                            <div class="creador-name">Daniela Hernandez</div>
                            <div class="creador-role">Desarrollo de Software</div>
                        </div>
                    </div>
                    <div class="creador-brand">Creador 3</div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include("../HTML/footer.php");
    ?>
</body>
</html>