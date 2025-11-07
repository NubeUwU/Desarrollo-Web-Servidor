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


// Mostramos los resultados
while ($row = $result->fetch_assoc()) {
    echo 'Nombre: ' . htmlspecialchars($row['Nombre']) . '<br>';
    echo 'Clave: ' . htmlspecialchars($row['Clave']) . '<br>';
    echo 'Rol: ' . htmlspecialchars($row['Rol']) . '<br>';
    echo 'Codigo: ' . htmlspecialchars($row['Codigo']) . '<br><br>';
}

// Cerrar conexión
$result->close();
$connection->close();
?>

