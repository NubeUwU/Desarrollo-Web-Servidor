<?php

function conectarBD() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agenda";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    return $conn;
}

function validarLogin($user, $pass) {
    $conn = conectarBD();

    // Usar los nombres correctos de la tabla
    $sql = "SELECT * FROM usuarios WHERE Nombre = '$user' AND Clave = '$pass'";
    $resultado = $conn->query($sql);

    if (!$resultado) {
        die("Error en la consulta: " . $conn->error);
    }

    $existe = ($resultado->num_rows > 0);

    $conn->close();
    return $existe;
}

