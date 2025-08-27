<?php
    session_start();
    session_unset();
    session_destroy();

    header('Location:../HTMLEN/index.html');
    exit;
?>