<?php

// Funcion para conectarse a la DB
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


// Funcion para validar el Login
function validarLogin($dni) {
    $conn = conectarBD();

    $sql = "
        SELECT 'alumno' AS tipo, nombreA as nombre
        FROM alumno
        WHERE dniA = ?

        UNION ALL

        SELECT 'profesor' AS tipo, nombreP as nombre
        FROM profesor
        WHERE dniP = ?
    ";

    $stmt = $conn->prepare($sql);
    if (!$stmt) die("Error al preparar la consulta: " . $conn->error);

    $stmt->bind_param("ss", $dni, $dni);
    $stmt->execute();

    $resultado = $stmt->get_result();
    if (!$resultado) die("Error al obtener resultado: " . $stmt->error);

    if ($fila = $resultado->fetch_assoc()) {
        $stmt->close();
        $conn->close();
        return [
            'tipo' => strtolower($fila['tipo']),
            'nombre' => $fila['nombre']
        ];
    }

    $stmt->close();
    $conn->close();
    return false;
}




function validarDNI($dni) {
    // Limpiamos espacios y pasamos a mayúsculas
    $dni = strtoupper(trim($dni));

    // Comprobar formato general: 8 números + 1 letra
    if (!preg_match("/^\d{8}[A-Z]$/", $dni)) {
        return false; // Formato incorrecto
    }

    $numero = substr($dni, 0, 8);
    $letra = substr($dni, -1);

    // Letras oficiales del DNI en orden
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

    // Calcular la letra correcta
    $letraCorrecta = $letras[$numero % 23];

    // Comparar con la letra del DNI
    return $letra === $letraCorrecta;
}


?>
