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
    <title>Nuevo Arte</title>
    <link rel="stylesheet" href="../CSS/preguntas.css">
    <script src="../JAVASCRIPT/q.js"></script>
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
</head>
<body>
    <?php
    include("../HTMLEN/navbar.php");
    ?>

<!-- BOTONES DE TEMA E IDIOMA -->

<button class="theme-toggle-left" onclick="window.location.href='../HTML/preguntas.php'">
    <img src="../MEDIA/IMG/españa.png" alt="español">
</button>

<button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
</button>

<!-- MAIN CONTENT -->
<section>
    <div class="container">
        <h1>A New Art Form?</h1>
        <form id="quizForm">
          
          <div class="question">
            <p>1. How do you prefer to express yourself artistically?</p>
            <label><input type="radio" name="q1" value="visual"> 🎨 With shapes and colors on a canvas</label>
            <label><input type="radio" name="q1" value="contemporary"> 🖼️ With ideas that challenge the everyday</label>
            <label><input type="radio" name="q1" value="popular"> 🎭 Preserving traditions and customs</label>
            <label><input type="radio" name="q1" value="graphics"> 💻 Designing with digital tools</label>
          </div>

          <div class="question">
            <p>2. Which artistic setting inspires you the most?</p>
            <label><input type="radio" name="q2" value="visual"> 🖌️ A studio full of paintings</label>
            <label><input type="radio" name="q2" value="contemporary"> 🏙️ An exhibition with modern installations</label>
            <label><input type="radio" name="q2" value="popular"> 🎉 A cultural fair full of colors and music</label>
            <label><input type="radio" name="q2" value="graphics"> 🖥️ A digital design studio</label>
          </div>

          <div class="question">
            <p>3. If you were a work of art, you would be…</p>
            <label><input type="radio" name="q3" value="visual"> 🖼️ A painting full of details</label>
            <label><input type="radio" name="q3" value="contemporary"> 🪞 An installation that makes people think</label>
            <label><input type="radio" name="q3" value="popular"> 🎶 A folk dance or mask</label>
            <label><input type="radio" name="q3" value="graphics"> 📊 A striking advertisement poster</label>
          </div>

          <div class="question">
            <p>4. What emotion do you want to leave in people with your art?</p>
            <label><input type="radio" name="q4" value="visual"> 😍 Admiration for beauty</label>
            <label><input type="radio" name="q4" value="contemporary"> 🤔 A question about the world</label>
            <label><input type="radio" name="q4" value="popular"> 😊 Joy and cultural pride</label>
            <label><input type="radio" name="q4" value="graphics"> 📢 Clarity and a direct message</label>
          </div>

          <div class="question">
            <p>5. If you could choose a "material" to create with, you would choose…</p>
            <label><input type="radio" name="q5" value="visual"> 🎨 Oils, watercolors, or charcoal</label>
            <label><input type="radio" name="q5" value="contemporary"> 🧩 Everyday objects transformed</label>
            <label><input type="radio" name="q5" value="popular"> 🧵 Clay, fabric, or handcrafted wood</label>
            <label><input type="radio" name="q5" value="graphics"> 🖥️ Editing and design software</label>
          </div>

          <div class="question">
            <button type="button" onclick="calculateResult()">See Result</button>
            <div class="error" id="error"></div>
            <div class="result" id="result"></div>
          </div>

        </form>
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