<?php

// <----- FUNCIONES ----->


// Funcion que crea una matriz 20x20 con números aleatorios del 0 al 100
function crearMatriz() {
    $matriz = [];
    for ($i = 0; $i < 20; $i++) {
        for ($j = 0; $j < 20; $j++) {
            $matriz[$i][$j] = rand(0, 100);
        }
    }
    return $matriz;
}


// Funcion que mustra la matriz
function mostrarMatriz($matriz) {
    echo "Matriz:<br>";
    for ($i = 0; $i < count($matriz); $i++) {
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            echo $matriz[$i][$j] . "  ";
        }
        echo "<br>";
    }
    echo "<br>";
}


// Funcion que suma los contenidos de cada columna y los asigna aun array
function calcSumColumna($matriz, &$sumasColumnas){
    for ($i = 0; $i < count($matriz); $i++) {
        $suma = 0;
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            $suma += $matriz[$j][$i];
        }
        $sumasColumnas[] = $suma;
    }
}



//Funcion que muestra los resultados de las sumas de cada columna
function mostrarResultados($sumasColumnas){
    $max
    echo "Suma de columnas:<br>";
    foreach ($sumasColumnas as $indice => $resultado){
        if
        echo "Columna $indice → Resultado: $resultado<br>";
    }
}





// <----- MAIN ----->

// Creamos las variables y llamamos a las funciones

$sumasColumnas = []; // Matriz para guardar los resultados
$matriz = crearMatriz(); // Crear matriz
mostrarMatriz($matriz); // Mostrar matriz
calcSumColumna($matriz, $sumasColumnas); // Sumar y guardar valores columnas
mostrarResultados($sumasColumnas);


?>