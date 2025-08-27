<?php
session_start();

$servidor = "localhost";
$usuarioBD = "root";
$contrasenaBD = "";
$baseDatos = "nad";

$conexion = new mysqli($servidor, $usuarioBD, $contrasenaBD, $baseDatos);

if ($conexion->connect_error) {
    die("ERROR: Connection cannot be made");
}

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contra = $_POST['contra'];

// Verificar si el usuario y correo existen
$consulta = "SELECT * FROM datos WHERE usuario='$usuario' AND correo='$correo'";
$result = $conexion->query($consulta);

if ($result->num_rows > 0) {
    $fila = $result->fetch_assoc();
    if ($fila['contra'] == $contra) {
        $_SESSION['usuario'] = $usuario;
        header('Location: ../HTMLEN/index1.php');
    } else {
        header('Location: ../HTMLEN/login.php?error=Incorrect Password');
    }
} else {
    header('Location: ../HTMLEN/login.php?error=Incorrect Data');
}

$conexion->close();
?>
