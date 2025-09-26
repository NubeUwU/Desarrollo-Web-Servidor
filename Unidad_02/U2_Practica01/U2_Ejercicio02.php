<?php

// Creamos las variables
$num1 = 2;
$num2 = 10;
$num3 = 8;


// Creamos un array con los números e inicializamos el mayor a 0
$numeros = array($num1,$num2,$num3);
$mayor = $numeros[0];

// Iteramos sobre el array para descubrir cual es mayor
foreach($numeros as $num){
    if($num > $mayor){
        $mayor = $num;
    }
}

echo "El mayor es: " . $mayor;
?>