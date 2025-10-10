<?php

//<----- Funciones ----->


// Funcion que crea una matriz 4x5 con números aleatorios del 0 al 9
function crearMatriz() {
    $matriz = [];
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matriz[$i][$j] = rand(0, 9);
        }
    }
    return $matriz;
}


// Funcion que mustra la matriz
function mostrarMatriz($matriz) {
    echo "Matriz:<br>";
    for ($i = 0; $i < count($matriz); $i++) {
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            echo $matriz[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo "<br>";
}


// Funcion que busca el menor y el mayor valor de la matriz y sus posiciones
function buscarExtremos($matriz, &$menor, &$mayor, &$filaMenor, &$columnaMenor, &$filaMayor, &$columnaMayor) {
    
	// Creamos las variables y las inicializamos
	$menor = PHP_INT_MAX; // Inicia en el mayor número posible
    $mayor = PHP_INT_MIN; // Inicia en el menor número posible
    $filaMenor = $columnaMenor = 0;
    $filaMayor = $columnaMayor = 0;

	// Iteramos sobre los valores de la matriz
    for ($i = 0; $i < count($matriz); $i++) {
        for ($j = 0; $j < count($matriz[$i]); $j++) {
           
			// Calculamos los mayores
			if ($matriz[$i][$j] > $mayor) {
                $mayor = $matriz[$i][$j];
                $filaMayor = $i;
                $columnaMayor = $j;
            }

			// Calculamos los menores
            if ($matriz[$i][$j] < $menor) {
                $menor = $matriz[$i][$j];
                $filaMenor = $i;
                $columnaMenor = $j;
            }
        }
    }
}


//<----- MAIN ----->

// Llamamos a las funciones
$matriz = crearMatriz();

mostrarMatriz($matriz);

buscarExtremos($matriz, $menor, $mayor, $filaMenor, $columnaMenor, $filaMayor, $columnaMayor);


// Mostramos los resultados
echo "El elemento de menor valor es: $menor<br>Se encuentra en la posición: ($filaMenor, $columnaMenor)<br><br>";
echo "El elemento de mayor valor es: $mayor<br>Se encuentra en la posición: ($filaMayor, $columnaMayor)<br>";

?>
