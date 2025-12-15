<?php
session_start();

// --- Función para conectar a la base de datos ---
function conectarDB(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cartas";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Conexión fallida: " . $conn->connect_error);

    return $conn;
}

// --- Función para actualizar puntos y extra ---
function actualizarDatos($puntos, $intentos){
    $conn = conectarDB();
    $sql = "UPDATE jugador SET puntos = puntos + ?, extra = extra + ? WHERE login = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) die("Error al preparar la consulta: " . $conn->error);

    $stmt->bind_param("iis", $puntos, $intentos, $_SESSION['login']);
    if (!$stmt->execute()) {
        die("Error al actualizar los datos: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}

// --- Función para mostrar los datos de los jugadores ---
function mostrarDatos(){
    $conn = conectarDB();
    $sql = "SELECT nombre, puntos, extra FROM jugador";
    $resultado = $conn->query($sql);
    if ($resultado->num_rows > 0) {
        while($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td style='border: 3px double black; padding: 5px;'>" . htmlspecialchars($fila["nombre"]) . "</td>
                    <td style='border: 3px double black; padding: 5px;'>" . htmlspecialchars($fila["puntos"]) . "</td>
                    <td style='border: 3px double black; padding: 5px;'>" . htmlspecialchars($fila["extra"]) . "</td>
                  </tr>";
        }
    }
    $conn->close();
}

// --- Guardamos los datos del turno actual antes de limpiar la sesión ---
$acierto = $_SESSION['acierto'] ?? false;
$intentos = $_SESSION['volteos'] ?? 0;
$pareja1 = $_SESSION['pareja1'] ?? '';
$pareja2 = $_SESSION['pareja2'] ?? '';
$puntosTurno = $acierto ? 1 : -1;
$mensaje = $acierto ? 
    "Se le sumará 1 punto, así como $intentos intentos" : 
    "Se le restará 1 punto, así como $intentos intentos";



// --- Actualizamos la base de datos ---
if (isset($_SESSION['acierto'])) {
    actualizarDatos($puntosTurno, $intentos);
}

// --- Limpiamos las variables de juego para evitar duplicar el update ---
unset($_SESSION['acierto'], $_SESSION['volteos'], $_SESSION['pareja1'], $_SESSION['pareja2']);


// --- Reiniciamos los valores para que al recargar no se dupliquen ---
$intentos = 0;
$puntosTurno = 0;
?>





<!----- HTML ----->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
<h1>Bienvenid@, <?php echo htmlspecialchars($_SESSION['login']); ?></h1>

<?php
if ($acierto) {
    echo "<h2>Acertó posiciones " . htmlspecialchars($pareja1) . " y " . htmlspecialchars($pareja2) . " después de $intentos intentos</h2>";
} else {
    echo "<h2>Fallo posiciones " . htmlspecialchars($pareja1) . " y " . htmlspecialchars($pareja2) . " después de $intentos intentos</h2>";
}
    echo "<p>$mensaje</p>";
?>


<h3>Puntos por jugador</h3>
<table style='border:2px solid black'>
    <tr>
        <th>Nombre</th>
        <th>Puntos</th>
        <th>Extra</th>
    </tr>
    <?php mostrarDatos(); ?>
</table>
</body>
</html>
