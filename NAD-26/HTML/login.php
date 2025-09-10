<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión - NAD</title>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/login.css">
  <link rel="stylesheet" href="../CSS/nav.css">
  <link rel="stylesheet" href="../CSS/DarkMode.css">
  <script src="../JAVASCRIPT/modo.js"></script>
</head>

<body class="fondo">
  <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/login.php'">
    <img src="../MEDIA/IMG/estados unidos.png" alt="estados unidos">
  </button>
  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
    <span class="theme-icon sun-icon">☀️</span>
    <span class="theme-icon moon-icon">🌙</span>
  </button>

  <header class="header">
    <div class="title">
      <img src="../MEDIA/IMG/LOGONAD.png">
      <a>
        <p>NAD</p>
        <h1>Nice Art of Dreams</h1>
      </a>
    </div>
    <nav class="nav">
      <ul class="menu">
        <li><a href="../HTML/index.html"><img src="../MEDIA/IMG/home.png">Inicio</a></li>
        <li><a href="../HTML/register.php">Artes Visuales<img src="../MEDIA/IMG/flechas.png"></a>
          <ul>
            <li><a href="../HTML/arteContemporaneo.php">Arte Contemporáneo</a></li>
            <li class="divisor"></li>
            <li><a href="../HTML/register.php">Artes Plásticas</a></li>
            <li class="divisor"></li>
            <li><a href="../HTML/register.php">Artes Gráficas</a></li>
            <li class="divisor"></li>
            <li><a href="../HTML/register.php">Artes Populares</a></li>
            <li class="divisor"></li>
          </ul>
        </li>
        <li><a href="../HTML/register.php">Galería<img src="../MEDIA/IMG/flechas.png"></a>
          <ul>
            <li><a href="../HTML/arte.php">Arte</a></li>
            <li class="divisor"></li>
          </ul>
        </li>

        <li><a href="../HTML/register.php">Acerca de</a></li>
        <li><a href="../HTML/login.php">Iniciar Sesión</a></li>
        <li><a href="../HTML/register.php">Registrarse</a></li>
      </ul>
    </nav>
  </header>

  <div class="glass">
    <form class="register-box" action="../PHP/sesion_conexion.php" method="post">
      <?php if (isset($_GET['error'])) { ?>
        <div class="error-message">
          <?php echo htmlspecialchars($_GET['error']); ?>
        </div>
      <?php }; ?>

      <h1>Iniciar Sesión</h1>
      <hr>
      <label>Nombre de Usuario:</label>
      <input type="text" name="usuario" id="usuario" required>
      <label>Contraseña:</label>
      <input type="password" name="contra" id="contra" required>
      <button type="submit">Iniciar Sesión</button>
      <p class="terms">Términos de Servicio | Política de Privacidad</p>
      <p>¿Ya tienes una cuenta? <a href="../HTML/register.php">Registrarse Aqui</a></p>
    </form>
  </div>
</body>

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