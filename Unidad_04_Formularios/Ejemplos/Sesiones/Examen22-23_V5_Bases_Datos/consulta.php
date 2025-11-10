<?php

// Solicitamos la informacion a login
require_once 'login.php';

// Guardamos los datos del login
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];


// Creamos la conexión
$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Error de conexión: " . $connection->connect_error);

// Consulta
$query = "SELECT * FROM Usuarios WHERE Nombre = '$usuario' AND Clave = '$clave'";
$result = $connection->query($query);
if (!$result) die("Error en la consulta: " . $connection->error);


// Mandamos al juego
if($result -> num_rows > 0){
    session_start();
    $row = $result->fetch_assoc();
    $_SESSION['codigoUsu'] = $row['Codigo'];
    header("Location:./Juego/dificultad.php");

    
// Si no lo encuentra manda muestra un error.
}else{
    echo "Usuario o contraseña incorrectos";
}

// Cerrar conexión
$result->close();
$connection->close();
?>

