<?PHP

// Se itera entre los numeros del 1 al 1000
for($i = 1; $i <= 1000; $i++){
    
    $sumDivisores = 0; // suma de los divisores de "i"
    
    // Se itera sobre el divisor
    for($j = 1; $j < $i; $j++){
       
        //Si es divisor, se suma al total
        if ($i % $j == 0){
            $sumDivisores += $j;
        }
    }

    // Si la suma de los divisores es igual al dividendo, se muestra el número por pantalla.
    if ($sumDivisores == $i){
        echo $i . " ";
    }
    
}

?>