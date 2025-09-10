<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/register.css">
    <script src="../JAVASCRIPT/modo.js"></script>
    <link rel="shortcut icon" href="../MEDIA/IMG/favicon_32x32_pad.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/DarkMode.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <title>Registro - NAD</title>

</head>

<body class="fondo">
    <button class="theme-toggle-left" onclick="window.location.href='../HTMLEN/register.php'">
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
                                <li><a href="../HTMLEN/register.php">Popular Arts</a></li>
                                <li class="divisor"></li>
                            </ul>
                        </li>
                        <li><a href="../HTMLEN/register.php">Gallery<img src="../MEDIA/IMG/flechas.png"></a>
                            <ul>
                                <li><a href="../HTMLEN/arte.php">Art</a></li>
                                <li class="divisor"></li>
                            </ul>
                        </li>
                        <li><a href="../HTMLEN/register.php">About</a></li>
                        <li><a href="../HTMLEN/login.php">Log In</a></li>
                        <li><a href="../HTMLEN/register.php">Register</a></li>
                    </ul>
                </nav>
            </header>

            <div class="glass">
                <form class="register-box" action="../PHPEN/registro_conexion.php" method="post">
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="error-message">
                            <?php echo htmlspecialchars($_GET['error']); ?>
                        </div>
                    <?php }; ?>



                    <h1>Register</h1>
                    <hr>
                    <label for="nombre">Name:</label>
                    <input name="nombre" type="text" placeholder="Enter your name" required>

                    <label for="usuario">Username:</label>
                    <input name="usuario" type="text" placeholder="Enter your username" required>

                    <label for="email">Email:</label>
                    <input name="correo" type="email" placeholder="Enter your email" required>

                    <label for="contra">Password:</label>
                    <input name="contra" type="password" placeholder="Enter your password" required>

                    <label for="contras">Confirm Password:</label>
                    <input name="contras" type="password" placeholder="Re-enter your password" required>

                    <button type="submit"> Register</button>

                    <p class="terms">Terms of Service | Privacy Policy</p>
                    <p>Already have an account? <a href="../HTMLEN/login.php">Login here</a></p>
                </form>
            </div>

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
                    <h4>At NAD</h4>
                    <p>Visual Arts</p>
                    <p>Plastic Arts</p>
                    <p>Graphic Arts</p>
                    <p>Popular Arts</p>
                    <p>Contemporary Art</p>
                    </a>
                </div>
                <div class="footer-column">
                    <h4>Legal Notice</h4>
                    <p>About Us</p>
                    <p>Privacy Policy</p>
                    <p>Terms of Service</p>
                </div>
            </footer>
</body>

</html>