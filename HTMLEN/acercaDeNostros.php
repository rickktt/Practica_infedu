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
</head>

<body>

    <?php
    include("../HTMLEN/navbar.php");
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