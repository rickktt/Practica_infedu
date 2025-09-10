<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - NAD</title>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/register.css">
  <link rel="stylesheet" href="../CSS/nav.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body class="fondo">
  <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/register.php'">
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
    <form class="register-box" action="../PHP/registro_conexion.php" method="post">
      <?php if (isset($_GET['error'])) { ?>
        <div class="error-message">
          <?php echo htmlspecialchars($_GET['error']); ?>
        </div>
      <?php }; ?>


      <h1>Registro</h1>
      <hr>
      <label for="nombre">Nombre:</label>
      <input name="nombre" type="text" placeholder="Digite su nombre" required>

      <label for="usuario">Nombre de Usuario:</label>
      <input name="usuario" type="text" placeholder="Digite el nombre de usuario" required>

      <label for="contra">Contraseña:</label>
      <input name="contra" type="password" placeholder="Digite la contraseña" required>

      <label for="contras">Confirmar Contraseña:</label>
      <input name="contras" type="password" placeholder="Reeescriba su contraseña" required>

      <button type="submit"> Registrarse</button>

      <p class="terms">Términos de Servicio | Política de Privacidad</p>
      <p>¿Ya tienes una cuenta? <a href="../HTML/login.php">Inicia Sesión aquí</a></p>
    </form>
  </div>



  <footer>
    <div class="footer-left">
      <img src="../MEDIA/IMG/LOGONAD.png" alt="Logo de la página web NAD">
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