<?php
session_start();
include 'pintar-circulos.php';

// Comprobamos que existan los datos esenciales
if (!isset($_SESSION['cantidad'], $_SESSION['jugada'])) {
    echo "Error: datos del juego no encontrados.";
    exit;
}

$cantidad = $_SESSION['cantidad'];
$jugada = $_SESSION['jugada'];
$combinacion = [];


// Añadimos los circulos al array de las combinaciones
for ($i = 0; $i < $cantidad; $i++) {
    $combinacion[$i] = $_SESSION["col$i"];
}

// Mostramos la combinación correcta
echo "<h1>Combinación correcta:</h1>";
pintar_circulos($combinacion);


// Comprobamos si acertó toda la secuencia
if ($combinacion === $jugada) {
    echo "<h2>¡ACERTASTE!</h2>";
} else {
    echo "<h2>Has fallado.</h2>";
    echo "<h2>Tu jugada:</h2>";
    pintar_circulos($jugada);
}

// Limpiamos la jugada para poder volver a jugar
unset($_SESSION['jugada']);
?>

<br><br>
<a href="dificultad.html">Volver a empezar</a>
