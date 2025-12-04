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


function validarLogin($user, $pass, &$nombre) {
    // Iniciamos la existencia del usuario en false
    $existe = false;

    // Conectamos a la base de datos
    $conn = conectarBD();

    // Consulta preparada
    $sql = "SELECT * FROM jugador WHERE Login = ? AND Clave = ?";
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

    // Obtenemos los resultados
    if($resultado->num_rows > 0){
        $fila = $resultado->fetch_assoc();
        $nombre = $fila['nombre'];
        $existe = true;
    }

    // Cerrar
    $stmt->close();
    $conn->close();

    // Devolvemos su existencia
    return $existe;
}


