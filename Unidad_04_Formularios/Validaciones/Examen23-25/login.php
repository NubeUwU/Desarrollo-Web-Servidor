<?php

// Funcion que conecta a la base de datos
function conectarBD() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "BDoposicion";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    return $conn;
}


// Función que valida los datos del login según el rol
function validarLoginRol($dni) {
    $conn = conectarBD();
    $usuario = [
        'rol' => '',
        'dni' => '',
        'nombre' => ''
    ];

    $sql = "
        SELECT *, 'alumno' AS rol FROM alumno WHERE dniA = ?
        UNION
        SELECT *, 'profesor' AS rol FROM profesor WHERE dniP = ?
    ";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die('Error al preparar la consulta: ' . $conn->error);
    }

    $stmt->bind_param("ss", $dni, $dni);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($fila = $resultado->fetch_assoc()) {
        $usuario['rol'] = $fila['rol'];
        $usuario['dni'] = $fila['dni'];
        $usuario['nombre'] = $fila['nombre'];
    }

    $stmt->close();
    $conn->close();

    return $rol;
}


// Funcion que muestra los datos de todos los cursos
function datosCursos($dni) {
    $conn = conectarBD();

    $sql = "SELECT * FROM curso WHERE profesor = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die('Error al preparar la consulta: ' . $conn->error);
    }

    // Vinculamos el parámetro de manera segura
    $stmt->bind_param("s", $dni);
    $stmt->execute();

    $resultado = $stmt->get_result();

    $cursos = [];
    while ($fila = $resultado->fetch_assoc()) {
        $cursos[] = $fila;
    }

    $stmt->close();
    $conn->close();

    return $cursos;
}





?>