<?php

function conectarBD() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jerogrifico";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    return $conn;
}


function validarLogin($user, $pass) {
    $conn = conectarBD();

    // Consulta preparada
    $sql = "SELECT * FROM jugador WHERE Nombre = ? AND Clave = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    // Vincular parámetros
    $stmt->bind_param("ss", $user, $pass);

    // Ejecutar
    $stmt->execute();

    // Obtener resultado
    $resultado = $stmt->get_result();

    if (!$resultado) {
        die("Error al obtener resultado: " . $stmt->error);
    }

    $existe = ($resultado->num_rows > 0);

    // Cerrar
    $stmt->close();
    $conn->close();

    return $existe;
}

