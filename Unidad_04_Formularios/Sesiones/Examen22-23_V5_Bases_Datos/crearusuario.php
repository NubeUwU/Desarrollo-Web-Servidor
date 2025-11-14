<?php
include 'login.php';

$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) {
    die("Conexión fallida: " . $connection->connect_error);
}

// Recoger datos del formulario
$nombre = ucfirst($_POST['nombre']);
$clave = $_POST['clave'];
$rol = "0";

// Insertar en la tabla "usuarios"
$sql = "INSERT INTO usuarios (Nombre, Clave, Rol) VALUES ('$nombre', '$clave', $rol)";

if ($connection->query($sql) === TRUE) {
    echo "Usuario registrado correctamente.<br>";
    echo '<a href="index.php">Iniciar Sesion</a>';
} else {
    echo "Error al registrar usuario: El usuario ya existe <br>";
    echo '<a href="registro.php">Volver al registro</a>';
    exit();
}

$connection->close();
?>
