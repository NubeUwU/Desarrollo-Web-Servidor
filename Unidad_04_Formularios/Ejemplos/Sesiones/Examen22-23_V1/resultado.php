<?php
session_start();
include 'pintar-circulos.php';

// Comprobamos que existan los colores de la combinación y la jugada
if(!isset($_SESSION['col1'], $_SESSION['col2'], $_SESSION['col3'], $_SESSION['col4'], $_SESSION['jugada'])){
    echo "Error: datos del juego no encontrados.";
    exit;
}

// Array con las combinaciones
$combinacion = [$_SESSION['col1'], $_SESSION['col2'], $_SESSION['col3'], $_SESSION['col4']];
$jugada = $_SESSION['jugada'];

// Pintamos la combinación correcta
echo "<h2>Combinación correcta:</h2>";
pintar_circulos($combinacion[0], $combinacion[1], $combinacion[2], $combinacion[3]);

// Comprobamos acierto
if($combinacion === $jugada){
    echo "<h1>¡ACERTASTE!</h1>";
} else {
    // Pintamos la jugada del usuario
    echo "<h2>Tu jugada:</h2>";
    pintar_circulos($jugada[0], $jugada[1], $jugada[2], $jugada[3]);
    echo "<h1>Has fallado.</h1>";
    
}

// Limpiamos la jugada para poder volver a jugar
unset($_SESSION['jugada']);
?>

<br><br>
<a href="inicio.php">Volver a empezar</a>
