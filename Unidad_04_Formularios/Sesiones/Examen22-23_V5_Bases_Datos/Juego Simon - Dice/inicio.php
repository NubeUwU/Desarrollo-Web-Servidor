<?php
session_start();
include 'pintar-circulos.php';

// Array de colores posibles
$colores = ['red', 'blue', 'yellow', 'green', 'white', 'purple', 'orange', 'pink'];
shuffle ($colores); // Mezclamos los colores para que sean aleatorios


// Cantidad seleccionada en el formulario
$numCol = $_SESSION["numCol"] = $_POST["numCol"];
$numCir = $_SESSION["numCir"] = $_POST["numCir"];


// Creamos un array donde guardaremos los colores generados
$col = [];


echo "<h1>Bienvenido al Simon ". $_SESSION['usuario'] ."</h1>";
echo "<p>Se han generado $numCir circulos con $numCol posibles colores aleatorios.<br>
        Recuerda su orden y luego pulsa el botón para jugar.</p>";


// Generamos X colores aleatorios y los guardamos en un array y en sesión
for ($i = 0; $i < $numCir; $i++) {
    $col[$i] = $colores[rand(0, $numCol - 1)];
    $_SESSION["col$i"] = $col[$i];
}

// Pintamos los círculos con los colores generados
pintar_circulos($col);
?>


<br><br>
<form action="jugar.php" method="post">
    <button type="submit" name="boton">Vamos a jugar</button>
</form>
