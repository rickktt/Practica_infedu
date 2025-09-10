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
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
    <script src="../JAVASCRIPT/modo.js"></script>
    <link rel="stylesheet" href="../CSS/DarkMode.css">
    <link rel="stylesheet" href="../CSS/nav.css">
</head>

<body>

    <?php
    include("../HTMLEN/nav1.php");
    ?>
     <button class="theme-toggle-left" onclick="window.location.href='../HTML/acercaDeNosotros.php'">
        <img src="../MEDIA/IMG/españa.png" alt="Spanish flag">
    </button>
    
    <button class="theme-toggle" id="themeToggle" aria-label="Toggle light/dark mode">
        <span class="theme-icon sun-icon">☀️</span>
        <span class="theme-icon moon-icon">🌙</span>
    </button>

        <section class="about-section">
            <div class="about-text">
                <h2>ABOUT US</h2>
                <div class="divider"></div>
                <p><span class="highlight">NAD (Nice Art of Dreams)</span> is a digital art gallery created to bring
                    visual art closer to everyone, regardless of prior experience. We want art to be lived, felt, and
                    dreamed.</p>
                <p>Here you will discover paintings, sculptures, illustrations, photography, digital art, and more. Each
                    artwork is carefully selected to offer a <b>unique and immersive experience</b>.</p>
                <p>We have a <b>special collection</b> of standout works that invite reflection, inspiration, and
                    emotion, showcasing new ways of seeing the world.</p>
                <p>Our mission is for art to be a part of your everyday life, not just something to observe, but
                    something to <b>live intensely</b>. Because at NAD, we believe that art transforms.</p>
                <p>Join our community, explore new trends, and rediscover beauty from a different perspective.</p>
            </div>
            <div class="about-image">
                <img src="../MEDIA/IMG/logoo.png" alt="NAD Logo">
            </div>
        </section>
   <!-- Nueva sección de creadores mejorada -->
    <section class="creadores-section-new">
        <div class="container">
            <h2 class="section-title">OUR TEAM</h2>
            <div class="creadores-grid-new">
                
                <!-- Creador 1 -->
                <div class="creador-item">
                    <div class="creador-circle">
                        <img src="../MEDIA/IMG/pamela.jpg" alt="Pamela">
                        <div class="creador-overlay">
                            <div class="creador-name">Pamela Hernandez</div>
                            <div class="creador-role">Software Development</div>
                        </div>
                    </div>
                    <div class="creador-brand">Creator 1</div>
                </div>
                
                <!-- Creador 2 -->
                <div class="creador-item">
                    <div class="creador-circle">
                        <img src="../MEDIA/IMG/Nicole.jpg" alt="Nicole">
                        <div class="creador-overlay">
                            <div class="creador-name">Nicole Valladares</div>
                            <div class="creador-role">Software Development</div>
                        </div>
                    </div>
                    <div class="creador-brand">Creator 2</div>
                </div>
                
                <!-- Creador 3 -->
                <div class="creador-item">
                    <div class="creador-circle">
                        <img src="../MEDIA/IMG/daniela.jpg" alt="Daniela">
                        <div class="creador-overlay">
                            <div class="creador-name">Daniela Hernandez</div>
                            <div class="creador-role">Software Development</div>
                        </div>
                    </div>
                    <div class="creador-brand">Creator 3</div>
                </div>
            </div>
        </div>
    </section>

        <?php
    include("../HTMLEN/footer.php");
    ?>
</body>

</html>