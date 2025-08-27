<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión - NAD</title>
  <link rel="stylesheet" href="../CSS/login.css">
  <script src="../JAVASCRIPT/modo.js"></script>
  <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/DarkMode.css">
</head>

<body class="fondo">
  <button class="theme-toggle-left" onclick="window.location.href='../HTML/login.php'">
    <img src="../MEDIA/IMG/españa.png" alt="estados unidos">
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
          <li><a href="../HTMLEN/index.html"><img src="../MEDIA/IMG/home.png">Home</a></li>
          <li><a href="../HTMLEN/register.php">Visual Arts<img src="../MEDIA/IMG/flechas.png"></a>
            <ul>
              <li><a href="../HTMLEN/register.php">Contemporary Art</a></li>
              <li class="divisor"></li>
              <li><a href="../HTMLEN/register.php">Plastic Arts</a></li>
              <li class="divisor"></li>
              <li><a href="../HTMLEN/register.php">Graphic Arts</a></li>
              <li class="divisor"></li>
              <li><a href="../HTMLEN/register.php">Folk Arts</a></li>
              <li class="divisor"></li>
            </ul>
          </li>
          <li><a href="../HTMLEN/register.php">Gallery</a>
            <ul>
              <li><a href="../HTMLEN/arte.php">Art</a></li>
              <li class="divisor"></li>
            </ul>
          </li>
          <li><a href="../HTMLEN/register.php">About</a></li>
          <li><a href="../HTMLEN/login.php">Log In</a></li>
          <li><a href="../HTMLEN/register.php">Sign Up</a></li>
          <li><a href=""><img class="icon" src="../MEDIA/IMG/traduccion.png" alt="Language icon"></a></li>
        </ul>
      </nav>
    </header>


    <div class="glass">
      <form class="register-box" action="../PHPEN/sesion_conexion.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
          <div class="error-message">
            <?php echo htmlspecialchars($_GET['error']); ?>
          </div>
        <?php }
        ; ?>

        <h2>Log In</h2>
        <label>Username:</label>
        <input type="text" name="usuario" id="usuario" required>
        <label>Email Address:</label>
        <input type="email" name="correo" id="correo" required>
        <label>Password:</label>
        <input type="password" name="contra" id="contra" required>
        <button type="submit">Log In</button>
        <p class="terms">Terms of Service | Privacy Policy</p>
        <p>Already have an account? <a href="../HTMLEN/register.php">Sign Up Here</a></p>
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
    <p>Popular Arts</p>
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