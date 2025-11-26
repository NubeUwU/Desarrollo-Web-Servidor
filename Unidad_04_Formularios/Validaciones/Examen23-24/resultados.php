<?php
include 'login.php';

function aciertos() {
    $conn = conectarBD();

    $sql = "SELECT r.login, r.hora FROM respuestas r, solucion s WHERE  r.fecha = s.fecha = 2024-02-16 AND r.respuesta = s.solucion ORDER BY r.hora ASC";
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


function fallos(){
    $conn = conectarBD();

    $sql = "SELECT r.login, r.hora FROM respuestas r, solucion s WHERE  r.fecha = s.fecha AND r.respuesta != s.solucion ORDER BY r.hora ASC";
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
    <h2>Jugadores acertantes:</h2>
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


<h2>Jugadores que han fallado:</h2>
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