<?php

//<----- Funciones ----->


// Funcion que crea una matriz 10x10 con números aleatorios del 0 al 100
function crearMatriz() {
    $matriz = [];
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
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


// Funcion que busca el mayor valor de la matriz y su posicion
function buscarMaximo($matriz, &$mayor, &$filaMayor, &$columnaMayor) {
    
	// Creamos las variables y las inicializamos
    $mayor = PHP_INT_MIN; // Inicia en el menor número posible
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
        }
    }
}



// <----- MAIN ----->

// Llamamos a las funciones

$matriz = crearMatriz(); // Crear matriz
mostrarMatriz($matriz); // Mostrar matriz
buscarMaximo($matriz, $mayor, $filaMayor, $columnaMayor); // Mostrar valores

// Mostramos el mayor valor
echo "El mayor valor de la matriz es el: " . $mayor . ".<br>Se encuentra en la posicion [" .$filaMayor.",". $columnaMayor . "]";



?>