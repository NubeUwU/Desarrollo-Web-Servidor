<?PHP

//Creamos la matriz
$matriz = [];


// Llenamos la matriz 3x5 con números aleatorios
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(0, 9);
    }
}

// Mostramos el contenido por fila
for ($i = 0; $i < count($matriz); $i++) {
    echo "Fila " . ($i+1) . ": " ;

    for ($j = 0; $j < 5; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";

// Mostramos el contenido por columna
for ($i = 0; $i < count($matriz); $i++) {
    echo "Columna " . ($i+1) . ": " ;

    for ($j = 0; $j < 3; $j++) {
        echo $matriz[$j][$i] . " ";
    }
    echo "<br>";
}


?>