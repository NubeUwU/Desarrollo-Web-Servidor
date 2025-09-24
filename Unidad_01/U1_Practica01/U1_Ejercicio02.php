<?php

// Creamos las variables e inicializamos el mayor a 0
$num1 = 2;
$num2 = 10;
$num3 = 7;
$mayor = $numeros[0];

// Creamos un array con los números
$numeros = [$num1,$num2,$num3];

// Iteramos sobre el array para descubrir cual es mayor
foreach($numeros as $num){
    if($num > $mayor){
        $mayor = $num;
    }

echo "El mayor es: " . $mayor;
}
?>