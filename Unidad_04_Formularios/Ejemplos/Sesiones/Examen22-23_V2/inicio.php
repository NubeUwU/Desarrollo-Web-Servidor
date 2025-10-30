<?php
session_start();
include 'pintar-circulos.php';

// Array de colores posibles
$colores = ['red', 'blue', 'yellow', 'green'];

// Cantidad seleccionada en el formulario
$cantidad = $_SESSION["cantidad"] = $_POST["cantidad"];


// Creamos un array donde guardaremos los colores generados
$col = [];


echo "<h1>Bienvenido al Simon</h1>";
echo "<p>Se han generado $cantidad colores aleatorios. Recuerda su orden y luego pulsa el botón para jugar.</p>";


// Generamos X colores aleatorios y los guardamos en un array y en sesión
for ($i = 0; $i < $cantidad; $i++) {
    $col[$i] = $colores[rand(0, 3)];
    $_SESSION["col$i"] = $col[$i];
}

// Pintamos los círculos con los colores generados
pintar_circulos($col);
?>


<br><br>
<form action="jugar.php" method="post">
    <button type="submit" name="boton">Vamos a jugar</button>
</form>
