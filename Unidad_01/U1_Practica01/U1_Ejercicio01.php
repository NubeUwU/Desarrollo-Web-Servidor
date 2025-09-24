<?php

//Funciones
function Multiplicar($num1,$num2){
    $resultado = $num1 * $num2;
    echo "El resultado es: " . $resultado;   
}

function Suma($num1,$num2){
    $resultado = $num1 + $num2;
    echo "El resultado es: " . $resultado;
}

function Resta($num1,$num2){
    $resultado = $num1 - $num2;
    echo "El resultado es: " . $resultado;   
}


// Creamos las variables
$num1 = 5;
$num2 = 10;


// Realizamos funciones según las variables 
if ($num1 == $num2){
    Multiplicar($num1,$num2);

} else if($num1 > $num2){
    Resta($num1,$num2);

} else{
    Suma($num1, $num2);
}
?>