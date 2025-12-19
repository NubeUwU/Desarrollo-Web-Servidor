<?PHP

// Funcion que conecta a la base de datos
function conectarBD() {
    $servername = "localhost";
    $username = "jugador";
    $password = "";
    $dbname = "jerogrifico";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    return $conn;
}


/* Funcion que muestra las puntuaciones*/
function puntuaciones() {
    $conn = conectarBD();

    $sql = "SELECT login, puntos FROM jugador ORDER BY puntos DESC";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        while($fila = $resultado->fetch_assoc()) {
            echo "<tr>
            
                <!-- Datos del login -->
                <td style='border: 3px double black; padding: 5px;'>" . htmlspecialchars($fila["login"]) . "</td>


                <!-- Datos de los puntos -->
                <td style='border: 3px double black; padding: 5px;'>" . htmlspecialchars($fila["puntos"]) . "</td>


                <!-- Gráfico de barras -->
                <td style='border: 3px double black; padding: 5px;'>
                            <div style='background-color:#90D5FF; height:20px; width:" . ($fila["puntos"] * 2.5) . "px;'></div>
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
    <h1>Puntos por Jugador</h1>
    <table style="border: 3px double black; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="border: 3px double black; padding: 5px;">Login</th>
            <th style="border: 3px double black; padding: 5px;">Puntos</th>
            <th style="border: 3px double black; padding: 5px;">Grafico</th>
        </tr>
    </thead>
    <tbody>
        <?php puntuaciones(); ?>
    </tbody>
</table>
</body>
</html>