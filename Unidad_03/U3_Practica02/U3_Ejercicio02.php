<?php

// Creamos la matriz
$matriz = [
    [1, 14, 8, 3],
    [6, 19, 7, 2],
    [3 ,13, 4, 1]
];

// Creamos dos arrays con los niveles e idiomas
$niveles = ["Básico", "Medio", "Perfeccion"];
$idiomas = ["Inglés", "Frances", "Alemán", "Ruso"];

// Iteramos sobre la matriz y mostramos el resultado
for ($i = 0; $i < count($matriz); $i++){
    echo "Nivel " . $niveles[$i] . ":<br>";

    for($j = 0; $j < count($matriz[$i]); $j++){
       echo "Idioma: " . $idiomas[$j] . " → " . $matriz[$i][$j] . " alumnos<br>";
    }
echo "<br>";
}

?>