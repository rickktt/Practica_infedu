<?php
session_start();

$servidor = "localhost";
$usuarioBD = "root";
$contrasenaBD = "";
$baseDatos = "nad";

$conexion = new mysqli($servidor, $usuarioBD, $contrasenaBD, $baseDatos);

if ($conexion->connect_error) {
    die("ERROR: No se puede realizar la conexión");
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
        header('Location: ../HTML/index1.php');
    } else {
        header('Location: ../HTML/login.php?error=Contraseña Incorrecta');
    }
} else {
    header('Location: ../HTML/login.php?error=Datos Incorrectos');
}

$conexion->close();
?>
