<?php
session_start();

if (isset($_SESSION['nombre']) && (isset($_POST['jugador1']) || isset($_POST['jugador2']) || isset($_POST['jugador3']))) {
    echo "<h2>Bienvenido, {$_SESSION['nombre']}</h2>";
    echo "<p>Jugadores introducidos:</p>";
    echo "Jugador 1: " . $_POST['jugador1'] . "<br>";
    echo "Jugador 2: " . $_POST['jugador2'] . "<br>";
    echo "Jugador 3: " . $_POST['jugador3'] . "<br>";
}
?>
