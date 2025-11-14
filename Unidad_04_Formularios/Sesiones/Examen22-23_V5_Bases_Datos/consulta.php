<?php
require_once 'login.php';

session_start();

// Limpiamos cualquier dato anterior
session_unset();


// Recogemos los datos del formulario
$usuario = ucfirst(strtolower($_POST["usuario"]));
$clave = $_POST['clave'];


// Conexión a la base de datos
$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Error de conexión: " . $connection->connect_error);


// Consulta
$query = "SELECT * FROM Usuarios WHERE Nombre LIKE '$usuario' AND Clave LIKE '$clave'";
$result = $connection->query($query);
if (!$result) die("Error en la consulta: " . $connection->error);


// Si existe el usuario
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $_SESSION['codigoUsu'] = $row['Codigo'];
    $_SESSION['usuario'] = ucfirst($row['Nombre']);
    header("Location: ./Juego/dificultad.php");
    exit();

}else{
    echo "Usuario o contraseña incorrectos<br><br>";
    echo '<a href="index.php>Iniciar Sesión</a>"';
}

$result->close();
$connection->close();
?>
