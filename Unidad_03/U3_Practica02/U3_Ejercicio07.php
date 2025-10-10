<?PHP

//<----- Funciones ----->


// Funcion que crea una matriz 3x4 con números aleatorios del 0 al 9
function crearMatriz() {
    $matriz = [];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 4; $j++) {
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


// Funcion que busca el MAYOR valor de cada fila de la matriz y sus promedios
function calcularMaxYPromedio($matriz, &$valores, &$promedios) {
    
	// Creamos los arrays para almacenar la informacion
    $valores = [];
    $promedios = [];


	// Iteramos sobre los valores de la matriz
    for ($i = 0; $i < count($matriz); $i++) {
        $mayorFila = PHP_INT_MIN; // Inicia en el menor número posible
        $sumaPromedio = 0;

        for ($j = 0; $j < count($matriz[$i]); $j++) {
           
			// Calculamos los mayores
			if ($matriz[$i][$j] > $mayorFila) {
                $mayorFila = $matriz[$i][$j];
            }
            $sumaPromedio += $matriz[$i][$j];
            
        }

        // Añadimos el maximo y el promedio de esa fila
        $valores[] = $mayorFila;
        $promedios[] = round($sumaPromedio / count($matriz[$i]), 2); // Redondeamos a decimales

    }
}


// Funcion que muestra el maximo y el promedio

function mostrarMaxYPromedio($maximos, $promedios){
    
    // Mostramos el vector de máximo
    echo "Vector de máximos:<br>[";
    echo implode(", ", $maximos);
    echo "]<br>";

    echo "<br>";


    // Mostramos el vector de promedios
    echo "Vector de promedios:<br>[";
    echo implode(", ", $promedios);
    echo "]<br>";
}



// <----- MAIN ----->

// Llamamos a las funciones
$matriz = crearMatriz();
mostrarMatriz($matriz);

calcularMaxYPromedio($matriz, $maximos, $promedios);
mostrarMaxYPromedio($maximos, $promedios);


?>