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
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/DarkMode.css">
    <script src="../JAVASCRIPTEN/q.js"></script>
    <script src="../JAVASCRIPTEN/modo.js"></script>
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
</head>
<body>
   <?php include("../HTML/nav1.php"); ?>

<!-- BOTONES DE TEMA E IDIOMA -->

<button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/preguntas.php'">
    <img src="../MEDIA/IMG/españa.png" alt="español">
</button>

<button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
</button>

    <!-- CONTENIDO PRINCIPAL -->
    <section>
        <div class="container">
            <h1>¿Un nuevo arte?</h1>
            <form id="quizForm">
              
              <div class="question">
                <p>1. ¿Cómo prefieres expresarte artísticamente?</p>
                <label><input type="radio" name="q1" value="visual"> 🎨 Con formas y colores en un lienzo</label>
                <label><input type="radio" name="q1" value="contemporaneo"> 🖼️ Con ideas que cuestionen lo cotidiano</label>
                <label><input type="radio" name="q1" value="popular"> 🎭 Rescatando tradiciones y costumbres</label>
                <label><input type="radio" name="q1" value="graficas"> 💻 Diseñando con herramientas digitales</label>
              </div>

              <div class="question">
                <p>2. ¿Qué escenario artístico te inspira más?</p>
                <label><input type="radio" name="q2" value="visual"> 🖌️ Un taller lleno de pinturas</label>
                <label><input type="radio" name="q2" value="contemporaneo"> 🏙️ Una exposición con instalaciones modernas</label>
                <label><input type="radio" name="q2" value="popular"> 🎉 Una feria cultural llena de colores y música</label>
                <label><input type="radio" name="q2" value="graficas"> 🖥️ Un estudio de diseño digital</label>
              </div>

              <div class="question">
                <p>3. Si fueras obra de arte, serías…</p>
                <label><input type="radio" name="q3" value="visual"> 🖼️ Un cuadro lleno de detalles</label>
                <label><input type="radio" name="q3" value="contemporaneo"> 🪞 Una instalación que hace reflexionar</label>
                <label><input type="radio" name="q3" value="popular"> 🎶 Una danza o una máscara folclórica</label>
                <label><input type="radio" name="q3" value="graficas"> 📊 Un cartel publicitario impactante</label>
              </div>

              <div class="question">
                <p>4. ¿Qué emoción quieres dejar en las personas con tu arte?</p>
                <label><input type="radio" name="q4" value="visual"> 😍 Admiración por la belleza</label>
                <label><input type="radio" name="q4" value="contemporaneo"> 🤔 Una pregunta sobre el mundo</label>
                <label><input type="radio" name="q4" value="popular"> 😊 Alegría y orgullo cultural</label>
                <label><input type="radio" name="q4" value="graficas"> 📢 Claridad y un mensaje directo</label>
              </div>

              <div class="question">
                <p>5. Si pudieras elegir un "material" para crear, escogerías…</p>
                <label><input type="radio" name="q5" value="visual"> 🎨 Óleos, acuarelas o carboncillo</label>
                <label><input type="radio" name="q5" value="contemporaneo"> 🧩 Objetos cotidianos transformados</label>
                <label><input type="radio" name="q5" value="popular"> 🧵 Barro, tela o madera artesanal</label>
                <label><input type="radio" name="q5" value="graficas"> 🖥️ Programas de edición y diseño</label>
              </div>

              <div class="question">
                <button type="button" onclick="calculateResult()">Ver resultado</button>
                <div class="error" id="error"></div>
                <div class="result" id="result"></div>
              </div>
            </form>
        </div>
    </section>
<footer>
  <div class="footer-left">
    <img src="../MEDIA/IMG/LOGONAD.png" alt="Logo de la página NAD">
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