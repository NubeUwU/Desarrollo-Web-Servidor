<?PHP

    // Iteramos en un bucle hasta el 50
    for($i = 2; $i<=50; $i++){
        $esPrimo = true;

        // Se busca si es primo hasta la raiz cuadrada de "i"
        for ($j = 2; $j <= sqrt($i); $j++) {
           
            // Si no es primo sale del segundo bucle
            if ($i % $j == 0) {
                $esPrimo = false;
                break; 
        }
    }

    // Muestra los primos por pantalla
    if ($esPrimo) {
        echo $i . " ";
    }
}

?>