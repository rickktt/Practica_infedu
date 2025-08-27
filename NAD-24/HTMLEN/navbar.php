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
            <li><a href="../HTMLEN/index1.php"><img class="im" src="../MEDIA/IMG/home.png">Home</a></li>
            <li><a href="../HTMLEN/artesVisuales.php">Visual Arts<img class="im" src="../MEDIA/IMG/flechas.png"></a>
                <ul>
                    <li><a href="../HTMLEN/arteContemporaneo.php">Contemporary Art</a></li>
                    <li class="divider"></li> 
                    <li><a href="../HTMLEN/artesPlasticas.php">Fine Arts</a></li>
                    <li class="divider"></li> 
                    <li><a href="../HTMLEN/artesGraficas.php">Graphic Arts</a></li>
                    <li class="divider"></li> 
                    <li><a href="../HTMLEN/artesPopulares.php">Folk Arts</a></li>
                    <li class="divider"></li> 
                </ul>
            </li>
            <li><a href="../HTMLEN/galeria.php">Gallery</a>
                <ul>
                    <li><a href="../HTMLEN/arte.php">Art</a></li>
                    <li class="divider"></li> 
                </ul>
            </li>
            <li><a href="../HTMLEN/acercaDeNostros.php">About Us</a></li>
            <li class="user-menu">
                <a href=""><img src="../MEDIA/IMG/pincel.png"> 
                    <?php echo htmlspecialchars($_SESSION['usuario']); ?>
                </a>
                <ul class="submenu">
                    <li><a href="../PHPEN/logout.php">Log Out</a></li>
                    <li class="divider"></li> 
                </ul>
            </li>
        </ul>
    </nav>
</header>