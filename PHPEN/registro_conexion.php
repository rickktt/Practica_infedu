<?php
$servidor = "localhost";
$usuarioBD = "root";
$contrasenaBD = "";
$baseDatos = "nad";

// Crear conexión
$conexion = new mysqli($servidor, $usuarioBD, $contrasenaBD, $baseDatos);

// Verificar conexión
if ($conexion->connect_error) {
    die("ERROR: Connection failed: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contra = $_POST['contra'];
$contras = $_POST['contras'];

// Validar contraseñas
if ($contra !== $contras) {
    header("Location: ../HTMLEN/register.php?error=The passwords do not match");
    exit();
}
//nombre
$sql = $conexion->prepare("SELECT id FROM datos WHERE nombre = ?");
$sql->bind_param("s", $nombre);
$sql->execute();
$resultado = $sql->get_result();

if ($resultado->num_rows > 0) {
    header("Location: ../HTMLEN/register.php?error=The name is already registered");
    exit();
}

// Verificar si el correo ya está registrado
$sql = $conexion->prepare("SELECT id FROM datos WHERE correo = ?");
$sql->bind_param("s", $correo);
$sql->execute();
$resultado = $sql->get_result();

if ($resultado->num_rows > 0) {
    header("Location: ../HTMLEN/register.php?error=The email is already registered");
    exit();
}

// Verificar si el usuario ya está registrado
$sql = $conexion->prepare("SELECT id FROM datos WHERE usuario = ?");
$sql->bind_param("s", $usuario);
$sql->execute();
$resultado = $sql->get_result();

if ($resultado->num_rows > 0) {
    header("Location: ../HTMLEN/register.php?error=The username is already registered");
    exit();
}

// Insertar nuevo usuario
$sql = $conexion->prepare("INSERT INTO datos (nombre, usuario, correo, contra) VALUES (?, ?, ?, ?)");
$sql->bind_param("ssss", $nombre, $usuario, $correo, $contra);

if ($sql->execute()) {
    header("Location: ../HTMLEN/login.php");
    exit();
} else {
    header("Location: ../HTMLEN/register.php?error=The user could not be registered");
    exit();
}

$conexion->close();
?>

