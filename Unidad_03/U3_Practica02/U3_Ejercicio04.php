 <?php

$matriz = [];

// Creamos la matriz 4x4 con números aleatorios
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = rand(0, 9);
    }
}

// Mostramos la matriz completa
echo "Matriz:<br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

// Diagonal principal
echo "<br>Diagonal principal: ";
for ($i = 0; $i < count($matriz); $i++) {
    echo $matriz[$i][$i] . " ";
}

// Diagonal secundaria
echo "<br>Diagonal secundaria: ";
for ($i = 0; $i < count($matriz); $i++) {
    $j = count($matriz) - 1 - $i; // columna de la diagonal secundaria
    echo $matriz[$i][$j] . " ";
}

?>
