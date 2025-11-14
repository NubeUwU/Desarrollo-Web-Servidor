<?php
// Inicio de sesión y carga de funciones
session_start();
include 'pintar-circulos.php';
require_once '../login.php'; // define $hn, $un, $pw, $db

// Conexión a la base de datos
$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
}

// Validamos que existan los datos esenciales del juego
if (!isset($_SESSION['cantidad'], $_SESSION['jugada'], $_SESSION['usuario'])) {
    echo "Error: datos del juego no encontrados.";
    exit;
}

// Recogemos los datos de sesión
$usuario = $_SESSION['usuario'];
$cantidad = $_SESSION['cantidad'];
$jugada = $_SESSION['jugada'];

// Generamos la combinación correcta
$combinacion = [];
for ($i = 0; $i < $cantidad; $i++) {
    $combinacion[$i] = $_SESSION["col$i"];
}

// Mostramos la combinación correcta
echo "<h2>Combinación correcta:</h2>";
pintar_circulos($combinacion);

// Obtenemos el código del usuario
$result = $connection->query("SELECT Codigo FROM Usuarios WHERE Nombre LIKE '$usuario'");
if ($result && $row = $result->fetch_assoc()) {
    $codigoUsu = $row['Codigo'];

    // Comprobamos si acertó la secuencia
    if ($combinacion === $jugada) {
        echo "<h1>¡ACERTASTE!</h1>";
        $acierto = 1;
    } else {
        echo "<h1>Has fallado.</h1>";
        echo "<h2>Tu jugada:</h2>";
        pintar_circulos($jugada);
        $acierto = 0;
    }

    // Insertamos el resultado en la tabla Jugadas
    $addPlay = "INSERT INTO Jugadas (codigousu, acierto) VALUES ($codigoUsu, $acierto)";
    $connection->query($addPlay);
}

// Limpiamos la jugada para poder volver a jugar
unset($_SESSION['jugada']);

// Cerramos la conexión
$connection->close();
?>

<br><br>
<a href="dificultad.php">Volver a empezar</a>
<a href="estadisticas.php">Estadísticas</a>
