<?php
session_start();
require_once '../login.php';
$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Error de conexión: " . $connection->connect_error);

// Consulta total de aciertos por usuario
$total = $connection->query("
    SELECT u.Codigo, u.Nombre, j.numcir, j.numcolor, SUM(j.acierto) AS num_aciertos
    FROM Jugadas j
    JOIN Usuarios u ON j.codigousu = u.Codigo
    GROUP BY u.Codigo
");
if (!$total) die("Error en la consulta: " . $connection->error);

// Encabezado de la tabla
echo <<<HTML
<h1>SIMON</h1>
<h2>{$_SESSION['usuario']} los resultados son:</h2>
<table border="1">
<tr>
    <th>Codigo Usuario</th>
    <th>Nombre</th>
    <th>Num. Circulos</th>
    <th>Num. Colores</th>
    <th>Número Aciertos</th>
    <th>Grafico</th>
</tr>
HTML;

// Mostramos los datos en la tabla
while ($row = $total->fetch_assoc()) {
    $codigo = $row['Codigo'];
    $nombre = $row['Nombre'];
    $numCir = $row['numcir'];
    $numCol = $row['numcolor'];
    $aciertos = $row['num_aciertos'];
    $grafico = '<div style="width:' . $aciertos . '%; height:10px; background-color:blue; margin:2px; border:2px solid black;"></div>';

    echo "<tr>
            <td>$codigo</td>
            <td>$nombre</td>
            <td>$numCir</td>
            <td>$numCol</td>
            <td>$aciertos</td>
            <td>$grafico</td>
          </tr>";
}

echo "</table>";

$connection->close();
?>
