<?php
include 'login.php';

// Función para mostrar los jugadores que han acertado el jeroglifico
function aciertos() {
    $conn = conectarBD();

    $sql = "SELECT r.login, r.hora 
            FROM respuestas r 
            JOIN solucion s ON r.fecha = s.fecha
            WHERE r.fecha = '2024-02-16'
            AND r.respuesta = s.solucion
            ORDER BY r.hora ASC";
            
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        while($fila = $resultado->fetch_assoc()) {
            echo "<tr>
            <!-- Mostrar datos del login -->
                        <td style='border: 3px double black; padding: 5px;'>" . htmlspecialchars($fila["login"]) . "</td>


                        <!-- Mostrar datos de la hora -->
                        <td style='border: 3px double black; padding: 5px;'>" . htmlspecialchars($fila["hora"]) . "</td>
                    </tr>";
        }
    }
    $conn->close();
}

// Función para contar los aciertos
function contarAciertos() {
    $conn = conectarBD();

    $sql = "SELECT COUNT(*) AS total
            FROM respuestas r
            JOIN solucion s ON r.fecha = s.fecha
            WHERE r.fecha = '2024-02-16'
            AND r.respuesta = s.solucion";

    $resultado = $conn->query($sql);
    $fila = $resultado->fetch_assoc();

    $conn->close();
    return $fila["total"];
}




// Función para mostrar los jugadores que han fallado el jeroglifico
function fallos(){
    $conn = conectarBD();

    $sql = "SELECT r.login, r.hora 
            FROM respuestas r 
            JOIN solucion s ON r.fecha = s.fecha
            WHERE r.fecha = '2024-02-16'
            AND r.respuesta != s.solucion
            ORDER BY r.hora ASC";

    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        while($fila = $resultado->fetch_assoc()) {
            echo "<tr>
            <!-- Mostrar datos del login -->
                        <td style='border: 3px double black; padding: 5px;'>" . htmlspecialchars($fila["login"]) . "</td>

                        <!-- Mostrar datos de la hora -->
                        <td style='border: 3px double black; padding: 5px;'>" . htmlspecialchars($fila["hora"]) . "</td>
                    </tr>";
        }
    }
    $conn->close();
}
?>


<!----- HTML ----->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fecha: 2024-02-16</h1>
    <br>
    <h2>Jugadores acertantes: <?php echo contarAciertos();?></h2>
    <table style="border: 3px double black; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="border: 3px double black; padding: 5px;">Login</th>
            <th style="border: 3px double black; padding: 5px;">Hora</th>
        </tr>
    </thead>
    <tbody>
        <?php
            aciertos();
        ?>
    </tbody>
</table>
<br><br><br>


<h2>Jugadores que han fallado</h2>
<table style="border: 3px double black; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="border: 3px double black; padding: 5px;">Login</th>
            <th style="border: 3px double black; padding: 5px;">Hora</th>
        </tr>
    </thead>
    <tbody>
        <?php
            fallos();
        ?>
    </tbody>
</body>
</html>