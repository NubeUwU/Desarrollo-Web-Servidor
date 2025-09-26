<?PHP

// Se itera sobre el primer numero
for ($i = 1; $i < 10; $i++){
    
    // Se itera sobre el segundo numero
    for($j = 1; $j < 10; $j++){
    
        // Mientras que "i" sea distinto de "j" se muestra por pantalla 
        if ($i != $j){
            echo "(" . $i. "," . $j . ") ";
        }
         
    }
    // Se muestra realiza un salto de linea
    echo "<br>";
}

?>