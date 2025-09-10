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
            <li><a href="../HTML/index1.php"><img class="im" src="../MEDIA/IMG/home.png">Inicio</a></li>
            <li><a href="../HTML/artesVisuales.php">Artes Visuales<img class="im" src="../MEDIA/IMG/flechas.png"></a>
                <ul>
                    <li><a href="../HTML/arteContemporaneo.php">Arte Contemporáneo</a></li>
                    <li class="divisor"></li>
                    <li><a href="../HTML/artesPlasticas.php">Artes Plásticas</a></li>
                    <li class="divisor"></li>
                    <li><a href="../HTML/artesGraficas.php">Artes Gráficas</a></li>
                    <li class="divisor"></li>
                    <li><a href="../HTML/artesPopulares.php">Artes Populares</a></li>
                    <li class="divisor"></li>
                </ul>
            </li>
            <li><a href="../HTML/galeria.php">Galería<img class="im" src="../MEDIA/IMG/flechas.png"></a>
                <ul>
                    <li><a href="../HTML/arte.php">Arte</a></li>
                    <li class="divisor"></li>
                </ul>
            </li>
            <li><a href="../HTML/acercaDeNostros.php">Acerca de</a></li>
            <li class="user-menu">
                <a href=""><img src="../MEDIA/IMG/brocha.png">
                    <?php echo htmlspecialchars($_SESSION['usuario']); ?>
                </a>
                <ul class="menues">
                    <li><a href="../PHP/logout.php">Cerrar Sesión</a></li>
                    <li class="divisor"></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>