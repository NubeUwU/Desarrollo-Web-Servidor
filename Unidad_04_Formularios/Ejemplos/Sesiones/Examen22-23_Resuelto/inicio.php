<?php
session_start();
include 'pintar-circulos.php';

// Array de colores posibles
$colores = ['red', 'blue', 'yellow', 'green'];

// Generamos 4 colores aleatorios y los guardamos en variables y sesión
$col1 = $_SESSION['col1'] = $colores[rand(0,3)];
$col2 = $_SESSION['col2'] = $colores[rand(0,3)];
$col3 = $_SESSION['col3'] = $colores[rand(0,3)];
$col4 = $_SESSION['col4'] = $colores[rand(0,3)];

// Pintamos los círculos con los colores aleatorios
pintar_circulos($col1, $col2, $col3, $col4);
?>

<br><br>
<form action="jugar.php" method="post">
    <button type="submit" name="boton">Vamos a jugar</button>
</form>
